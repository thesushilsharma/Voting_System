@extends('layouts.app')

@section('title', 'Student Login')

@section('content')
<div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-8">
    <h2 class="text-2xl font-bold text-center mb-6">Student Login</h2>

    @if($errors->has('login'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ $errors->first('login') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-4">
            <label for="studentid" class="block text-gray-700 text-sm font-bold mb-2">Student ID:</label>
            <input type="text" id="studentid" name="studentid"
                   class="w-full border-2 border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500"
                   value="{{ old('studentid') }}" required>
            @error('studentid')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username:</label>
            <input type="text" id="username" name="username"
                   class="w-full border-2 border-gray-300 rounded px-4 py-2 focus:outline-none focus:border-blue-500"
                   value="{{ old('username') }}" required>
            @error('username')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                Login
            </button>
        </div>
    </form>

    <div class="text-center mt-4">
        <a href="{{ route('dashboard') }}" class="text-blue-500 hover:text-blue-700">Back to Dashboard</a>
    </div>
</div>
@endsection
