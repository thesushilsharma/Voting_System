<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\Voter;
use App\Models\Result;
use App\Models\VotingSession;
use Carbon\Carbon;

class VotingController extends Controller
{
    public function showElection()
    {
        // Check if there's an active voting session today
        $today = Carbon::today();
        $votingSession = VotingSession::whereDate('date', $today)->first();

        if (!$votingSession) {
            return redirect()->route('dashboard')->with('error', 'There is no election today.');
        }

        // Check if current time is within voting hours
        if (!$votingSession->isActive()) {
            return redirect()->route('dashboard')->with('error', 'Voting is not currently active.');
        }

        // Check if user has already voted today
        $voter = session('voter');
        $hasVoted = Result::where('vid', $voter['vid'])
                         ->whereDate('date', $today)
                         ->exists();

        if ($hasVoted) {
            return redirect()->route('dashboard')->with('error', 'You have already voted today.');
        }

        // Get candidates by position
        $sportsCandidates = Candidate::byPosition('Sports')->get();
        $slateCandidates = Candidate::byPosition('slate')->get();
        $gmCandidates = Candidate::byPosition('GM')->get();

        return view('voting.election', compact('sportsCandidates', 'slateCandidates', 'gmCandidates'));
    }

    public function submitVote(Request $request)
    {
        $request->validate([
            'sports_vote' => 'required|integer',
            'slate_vote' => 'required|integer',
            'gm_votes' => 'required|array|min:1',
            'gm_votes.*' => 'integer'
        ]);

        $voter = session('voter');
        $today = Carbon::today();

        // Double-check if user has already voted
        $hasVoted = Result::where('vid', $voter['vid'])
                         ->whereDate('date', $today)
                         ->exists();

        if ($hasVoted) {
            return redirect()->route('dashboard')->with('error', 'You have already voted today.');
        }

        // Create the vote record
        Result::create([
            'sid' => 431605, // Static value from original code
            'slateid' => $request->slate_vote,
            'gmid' => implode(',', $request->gm_votes),
            'sportsid' => $request->sports_vote,
            'vid' => $voter['vid'],
            'date' => $today
        ]);

        return redirect()->route('dashboard')->with('success', 'Thank you for voting!');
    }

    public function showResults()
    {
        $votingSessions = VotingSession::orderBy('date', 'desc')->get();
        return view('voting.results', compact('votingSessions'));
    }

    public function showElectionResults($sessionId)
    {
        $session = VotingSession::findOrFail($sessionId);
        $results = Result::whereDate('date', $session->date)->get();

        // Process results for display
        $sportsResults = $this->processResults($results, 'sportsid', 'Sports');
        $slateResults = $this->processResults($results, 'slateid', 'slate');
        $gmResults = $this->processGMResults($results);

        return view('voting.election-results', compact('session', 'sportsResults', 'slateResults', 'gmResults'));
    }

    private function processResults($results, $field, $position)
    {
        $votes = $results->pluck($field)->countBy();
        $candidates = Candidate::byPosition($position)->get()->keyBy('id');

        return $votes->map(function ($count, $candidateId) use ($candidates) {
            return [
                'candidate' => $candidates[$candidateId] ?? null,
                'votes' => $count
            ];
        })->sortByDesc('votes');
    }

    private function processGMResults($results)
    {
        $gmVotes = collect();

        foreach ($results as $result) {
            $gmIds = explode(',', $result->gmid);
            foreach ($gmIds as $gmId) {
                $gmVotes->push(trim($gmId));
            }
        }

        $votes = $gmVotes->countBy();
        $candidates = Candidate::byPosition('GM')->get()->keyBy('id');

        return $votes->map(function ($count, $candidateId) use ($candidates) {
            return [
                'candidate' => $candidates[$candidateId] ?? null,
                'votes' => $count
            ];
        })->sortByDesc('votes');
    }
}
