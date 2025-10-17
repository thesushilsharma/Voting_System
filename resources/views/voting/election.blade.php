@extends('layouts.app')

@section('title', 'Cast Your Vote')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Online Voting</h1>
        <p class="text-gray-600 mt-2">Please select your candidates for each position</p>
    </div>

    <form method="POST" action="{{ route('vote.submit') }}" class="space-y-8">
        @csrf

        <!-- Sports Representative Section -->
        <fieldset class="bg-white rounded-lg shadow-lg p-6">
            <legend class="text-xl font-semibold text-blue-600 mb-4">Choose a Sports Representative:</legend>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead class="bg-blue-600 text-white">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2">Position</th>
                            <th class="border border-gray-300 px-4 py-2">Name of Sports Representative</th>
                            <th class="border border-gray-300 px-4 py-2">Vote</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sportsCandidates as $candidate)
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $candidate->position }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $candidate->cname }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <input type="radio" name="sports_vote" value="{{ $candidate->id }}" required
                                       class="w-4 h-4 text-blue-600">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @error('sports_vote')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </fieldset>

        <!-- Slate Section -->
        <fieldset class="bg-white rounded-lg shadow-lg p-6">
            <legend class="text-xl font-semibold text-blue-600 mb-4">Choose a Slate:</legend>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead class="bg-blue-600 text-white">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2">Position</th>
                            <th class="border border-gray-300 px-4 py-2">Name of Slate</th>
                            <th class="border border-gray-300 px-4 py-2">Vote</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($slateCandidates as $candidate)
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $candidate->position }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $candidate->cname }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <input type="radio" name="slate_vote" value="{{ $candidate->id }}" required
                                       class="w-4 h-4 text-blue-600">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @error('slate_vote')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </fieldset>

        <!-- General Members Section -->
        <fieldset class="bg-white rounded-lg shadow-lg p-6">
            <legend class="text-xl font-semibold text-blue-600 mb-4">Choose General Members:</legend>
            <p class="text-sm text-gray-600 mb-4">You can select multiple candidates</p>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead class="bg-blue-600 text-white">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2">Position</th>
                            <th class="border border-gray-300 px-4 py-2">Name of General Member</th>
                            <th class="border border-gray-300 px-4 py-2">Vote</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gmCandidates as $candidate)
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $candidate->position }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $candidate->cname }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <input type="checkbox" name="gm_votes[]" value="{{ $candidate->id }}"
                                       class="w-4 h-4 text-blue-600">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @error('gm_votes')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </fieldset>

        <div class="text-center">
            <button type="submit"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-8 rounded-lg text-xl shadow-lg transform hover:scale-105 transition-transform">
                🗳️ CAST YOUR VOTE!
            </button>
        </div>
    </form>
</div>
@endsection
