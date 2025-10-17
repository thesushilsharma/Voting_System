<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VotingSession;
use App\Models\Result;
use App\Models\Candidate;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!session('admin')) {
                return redirect()->route('admin.login');
            }
            return $next($request);
        });
    }

    public function showResults()
    {
        $votingSessions = VotingSession::orderBy('date', 'desc')->get();
        return view('admin.results', compact('votingSessions'));
    }

    public function createVotingSession()
    {
        return view('admin.create-session');
    }

    public function storeVotingSession(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time'
        ]);

        VotingSession::create([
            'date' => $request->date,
            'stime' => $request->start_time,
            'etime' => $request->end_time
        ]);

        return redirect()->route('admin.results')->with('success', 'Voting session created successfully!');
    }
}
