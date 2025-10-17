@extends('layouts.app')

@section('title', 'Create Election Session')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Create New Election Session</h1>

        <form method="POST" action="{{ route('admin.create.session') }}">
            @csrf

            <div class="mb-6">
                <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Election Date:</label>
                <input type="date" id="date" name="date"
                       class="w-full border-2 border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500"
                       value="{{ old('date') }}" required>
                @error('date')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-6">
                <div>
                    <label for="start_time" class="block text-gray-700 text-sm font-bold mb-2">Start Time:</label>
                    <input type="time" id="start_time" name="start_time"
                           class="w-full border-2 border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500"
                           value="{{ old('start_time', '09:00') }}" required>
                    @error('start_time')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="end_time" class="block text-gray-700 text-sm font-bold mb-2">End Time:</label>
                    <input type="time" id="end_time" name="end_time"
                           class="w-full border-2 border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500"
                           value="{{ old('end_time', '17:00') }}" required>
                    @error('end_time')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex items-center justify-between">
                <a href="{{ route('admin.results') }}"
                   class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Cancel
                </a>
                <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create Election Session
                </button>
            </div>
        </form>
    </div>

    <div class="mt-8 bg-blue-50 border border-blue-200 rounded-lg p-6">
        <h3 class="text-lg font-semibold text-blue-800 mb-2">📋 Instructions</h3>
        <ul class="text-blue-700 space-y-1">
            <li>• Set the date when the election will take place</li>
            <li>• Define the voting hours (start and end time)</li>
            <li>• Voters can only cast their votes during the specified time window</li>
            <li>• Each voter can vote only once per election session</li>
        </ul>
    </div>
</div>
@endsection
