@extends('layouts.app')

@section('title', 'Election Results')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Election Results</h1>
        <p class="text-gray-600 mt-2">Select an election date to view results</p>
    </div>

    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <table class="w-full">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="px-6 py-3 text-left">Election Date</th>
                    <th class="px-6 py-3 text-left">Voting Hours</th>
                    <th class="px-6 py-3 text-center">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($votingSessions as $session)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">{{ $session->date->format('F j, Y') }}</td>
                    <td class="px-6 py-4">{{ $session->stime }} - {{ $session->etime }}</td>
                    <td class="px-6 py-4 text-center">
                        <a href="{{ route('election.results', $session->id) }}"
                           class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            VIEW RESULTS
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="px-6 py-4 text-center text-gray-500">
                        No elections found
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
