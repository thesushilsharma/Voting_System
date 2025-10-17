@extends('layouts.app')

@section('title', 'Dashboard - Voting System')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold text-gray-800 mb-8">🗳️ Take Your Votes to the Next Level</h1>
    <p class="text-xl text-gray-600 mb-12">Voting technology that looks to the future, not the past.</p>

    <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
        @if(session('voter'))
            <!-- Voter Dashboard -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Cast Your Vote</h3>
                <p class="text-gray-600 mb-4">Participate in the current election</p>
                <a href="{{ route('election') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Vote Now
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold mb-4">View Results</h3>
                <p class="text-gray-600 mb-4">Check election results</p>
                <a href="{{ route('results') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    View Results
                </a>
            </div>
        @elseif(session('admin'))
            <!-- Admin Dashboard -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Manage Elections</h3>
                <p class="text-gray-600 mb-4">Create new voting sessions</p>
                <a href="{{ route('admin.create.session') }}" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
                    Create Session
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold mb-4">View Results</h3>
                <p class="text-gray-600 mb-4">Monitor election results</p>
                <a href="{{ route('admin.results') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    View Results
                </a>
            </div>
        @else
            <!-- Public Dashboard -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Student Login</h3>
                <p class="text-gray-600 mb-4">Login with your student credentials to vote</p>
                <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Student Login
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Admin Panel</h3>
                <p class="text-gray-600 mb-4">Manage elections and view results</p>
                <a href="{{ route('admin.login') }}" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
                    Admin Login
                </a>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Public Results</h3>
                <p class="text-gray-600 mb-4">View published election results</p>
                <a href="{{ route('results') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    View Results
                </a>
            </div>
        @endif
    </div>

    <div class="mt-12 bg-white rounded-lg shadow-lg p-8 max-w-4xl mx-auto">
        <h2 class="text-2xl font-bold mb-6">✅ Only 3 Steps — And Your Election Is Live!</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="text-center">
                <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-blue-600">1</span>
                </div>
                <h3 class="font-semibold mb-2">Create & manage ballots</h3>
                <p class="text-gray-600">with an intuitive admin dashboard</p>
            </div>
            <div class="text-center">
                <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-blue-600">2</span>
                </div>
                <h3 class="font-semibold mb-2">Upload your electoral roll</h3>
                <p class="text-gray-600">and authenticate voters securely</p>
            </div>
            <div class="text-center">
                <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-blue-600">3</span>
                </div>
                <h3 class="font-semibold mb-2">Launch the election</h3>
                <p class="text-gray-600">and monitor real-time turnout and results</p>
            </div>
        </div>
    </div>
</div>
@endsection
