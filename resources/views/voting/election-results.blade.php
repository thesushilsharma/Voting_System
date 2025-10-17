@extends('layouts.app')

@section('title', 'Election Results - ' . $session->date->format('F j, Y'))

@section('content')
<div class="max-w-6xl mx-auto">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Election Results</h1>
        <p class="text-gray-600 mt-2">{{ $session->date->format('F j, Y') }} | {{ $session->stime }} - {{ $session->etime }}</p>
    </div>

    <div class="grid lg:grid-cols-3 gap-8">
        <!-- Sports Representative Results -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-bold text-blue-600 mb-4">🏃‍♂️ Sports Representative</h2>
            <div class="space-y-3">
                @forelse($sportsResults as $result)
                    @if($result['candidate'])
                    <div class="flex justify-between items-center p-3 bg-gray-50 rounded">
                        <span class="font-medium">{{ $result['candidate']->cname }}</span>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-sm font-bold">
                            {{ $result['votes'] }} votes
                        </span>
                    </div>
                    @endif
                @empty
                    <p class="text-gray-500 text-center">No votes cast</p>
                @endforelse
            </div>
        </div>

        <!-- Slate Results -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-bold text-green-600 mb-4">📋 Slate</h2>
            <div class="space-y-3">
                @forelse($slateResults as $result)
                    @if($result['candidate'])
                    <div class="flex justify-between items-center p-3 bg-gray-50 rounded">
                        <span class="font-medium">{{ $result['candidate']->cname }}</span>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-sm font-bold">
                            {{ $result['votes'] }} votes
                        </span>
                    </div>
                    @endif
                @empty
                    <p class="text-gray-500 text-center">No votes cast</p>
                @endforelse
            </div>
        </div>

        <!-- General Members Results -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-bold text-purple-600 mb-4">👥 General Members</h2>
            <div class="space-y-3">
                @forelse($gmResults as $result)
                    @if($result['candidate'])
                    <div class="flex justify-between items-center p-3 bg-gray-50 rounded">
                        <span class="font-medium">{{ $result['candidate']->cname }}</span>
                        <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded-full text-sm font-bold">
                            {{ $result['votes'] }} votes
                        </span>
                    </div>
                    @endif
                @empty
                    <p class="text-gray-500 text-center">No votes cast</p>
                @endforelse
            </div>
        </div>
    </div>

    <div class="text-center mt-8">
        <a href="{{ route('results') }}"
           class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            ← Back to All Results
        </a>
    </div>

    <div class="mt-8 bg-blue-50 border border-blue-200 rounded-lg p-6">
        <h3 class="text-lg font-semibold text-blue-800 mb-2">📊 Election Summary</h3>
        <div class="grid md:grid-cols-3 gap-4 text-blue-700">
            <div class="text-center">
                <div class="text-2xl font-bold">{{ $sportsResults->sum('votes') }}</div>
                <div class="text-sm">Sports Votes</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold">{{ $slateResults->sum('votes') }}</div>
                <div class="text-sm">Slate Votes</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold">{{ $gmResults->sum('votes') }}</div>
                <div class="text-sm">GM Votes</div>
            </div>
        </div>
    </div>
</div>
@endsection
