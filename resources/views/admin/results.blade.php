@extends('layouts.app')

@section('title', 'Admin - Election Results')

@section('content')
<div class="max-w-6xl mx-auto">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Admin Panel - Election Results</h1>
        <a href="{{ route('admin.create.session') }}"
           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create New Election
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <table class="w-full">
            <thead class="bg-purple-600 text-white">
                <tr>
                    <th class="px-6 py-3 text-left">Election Date</th>
                    <th class="px-6 py-3 text-left">Voting Hours</th>
                    <th class="px-6 py-3 text-center">Status</th>
                    <th class="px-6 py-3 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($votingSessions as $session)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 font-medium">{{ $session->date->format('F j, Y') }}</td>
                    <td class="px-6 py-4">{{ $session->stime }} - {{ $session->etime }}</td>
                    <td class="px-6 py-4 text-center">
                        @if($session->isActive())
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-sm">Active</span>
                        @elseif($session->date->isPast())
                            <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-sm">Completed</span>
                        @else
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-sm">Scheduled</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="{{ route('election.results', $session->id) }}"
                           class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">
                            VIEW RESULTS
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                        No elections found. <a href="{{ route('admin.create.session') }}" class="text-blue-500 hover:underline">Create your first election</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
