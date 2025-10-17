<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>🗳️ Voting System - Take Your Votes to the Next Level</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Styles -->
    <style>
        body { font-family: 'Inter', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-5px); box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04); }
        .pulse-animation { animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite; }
        @keyframes pulse { 0%, 100% { opacity: 1; } 50% { opacity: .8; } }
        .floating { animation: floating 3s ease-in-out infinite; }
        @keyframes floating { 0% { transform: translate(0, 0px); } 50% { transform: translate(0, -10px); } 100% { transform: translate(0, -0px); } }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-2xl">🗳️</span>
                        <span class="ml-2 text-xl font-bold text-gray-800">Voting System</span>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                               class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md font-medium transition-colors">
                                Student Login
                            </a>
                            <a href="{{ route('admin.login') }}"
                               class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                                Admin Login
                            </a>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="gradient-bg text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="floating mb-8">
                    <span class="text-8xl">🗳️</span>
                </div>
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    Take Your Votes to the <span class="text-yellow-300">Next Level</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100 max-w-3xl mx-auto">
                    Voting technology that looks to the future, not the past. Building an election is easy; you're always in control with our modern voting system.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    @guest
                        <a href="{{ route('login') }}"
                           class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-colors card-hover">
                            🎓 Student Login
                        </a>
                        <a href="{{ route('admin.login') }}"
                           class="bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg font-bold text-lg hover:bg-yellow-300 transition-colors card-hover">
                            👨‍💼 Admin Panel
                        </a>
                    @else
                        <a href="{{ route('dashboard') }}"
                           class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-colors card-hover">
                            📊 Go to Dashboard
                        </a>
                    @endguest
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">✅ Only 3 Steps — And Your Election Is Live!</h2>
                <p class="text-xl text-gray-600">Create an election for your school or university in seconds</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center card-hover bg-blue-50 p-8 rounded-xl">
                    <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold">
                        1
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900">📋 Create & Manage Ballots</h3>
                    <p class="text-gray-600">Use our intuitive admin dashboard to set up candidates, positions, and election parameters with ease.</p>
                </div>

                <div class="text-center card-hover bg-green-50 p-8 rounded-xl">
                    <div class="bg-green-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold">
                        2
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900">🔐 Secure Authentication</h3>
                    <p class="text-gray-600">Upload your electoral roll and authenticate voters securely with student ID and username verification.</p>
                </div>

                <div class="text-center card-hover bg-purple-50 p-8 rounded-xl">
                    <div class="bg-purple-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-bold">
                        3
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900">🚀 Launch & Monitor</h3>
                    <p class="text-gray-600">Launch the election and monitor real-time turnout and results with comprehensive analytics.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Voting Positions Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">🏆 Election Positions</h2>
                <p class="text-xl text-gray-600">Vote for multiple positions in a single, streamlined process</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg card-hover">
                    <div class="text-center">
                        <div class="text-4xl mb-4">🏃‍♂️</div>
                        <h3 class="text-xl font-bold mb-4 text-gray-900">Sports Representative</h3>
                        <p class="text-gray-600 mb-4">Choose your sports representative from qualified candidates who will advocate for athletic programs and student wellness.</p>
                        <div class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Single Choice</div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg card-hover">
                    <div class="text-center">
                        <div class="text-4xl mb-4">📋</div>
                        <h3 class="text-xl font-bold mb-4 text-gray-900">Slate Selection</h3>
                        <p class="text-gray-600 mb-4">Select from different slates representing various student groups and their collective vision for the institution.</p>
                        <div class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Single Choice</div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg card-hover">
                    <div class="text-center">
                        <div class="text-4xl mb-4">👥</div>
                        <h3 class="text-xl font-bold mb-4 text-gray-900">General Members</h3>
                        <p class="text-gray-600 mb-4">Vote for multiple general members who will represent student interests in various committees and councils.</p>
                        <div class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">Multiple Choice</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">🛠️ Modern Tech Stack</h2>
                <p class="text-xl text-gray-600">Built with cutting-edge technology for reliability and security</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center card-hover bg-red-50 p-6 rounded-xl">
                    <div class="text-3xl mb-4">⚡</div>
                    <h3 class="font-bold text-gray-900 mb-2">Laravel 10+</h3>
                    <p class="text-gray-600 text-sm">Robust MVC framework</p>
                </div>

                <div class="text-center card-hover bg-blue-50 p-6 rounded-xl">
                    <div class="text-3xl mb-4">🎨</div>
                    <h3 class="font-bold text-gray-900 mb-2">Tailwind CSS</h3>
                    <p class="text-gray-600 text-sm">Responsive design</p>
                </div>

                <div class="text-center card-hover bg-green-50 p-6 rounded-xl">
                    <div class="text-3xl mb-4">🗄️</div>
                    <h3 class="font-bold text-gray-900 mb-2">SQLite</h3>
                    <p class="text-gray-600 text-sm">Reliable database</p>
                </div>

                <div class="text-center card-hover bg-purple-50 p-6 rounded-xl">
                    <div class="text-3xl mb-4">🔒</div>
                    <h3 class="font-bold text-gray-900 mb-2">Secure Auth</h3>
                    <p class="text-gray-600 text-sm">Laravel Breeze</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 gradient-bg text-white">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold mb-6">Ready to Start Voting?</h2>
            <p class="text-xl mb-8 text-blue-100">
                Join thousands of students who trust our platform for secure, transparent elections.
            </p>

            @guest
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('login') }}"
                       class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-colors card-hover">
                        🎓 Login as Student
                    </a>
                    <a href="{{ route('results') }}"
                       class="border-2 border-white text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-white hover:text-blue-600 transition-colors card-hover">
                        📊 View Public Results
                    </a>
                </div>
            @else
                <a href="{{ route('dashboard') }}"
                   class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-colors card-hover inline-block">
                    📊 Go to Dashboard
                </a>
            @endguest
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <span class="text-2xl">🗳️</span>
                        <span class="ml-2 text-xl font-bold">Voting System</span>
                    </div>
                    <p class="text-gray-400">
                        Modern, secure, and user-friendly voting platform for educational institutions.
                    </p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('login') }}" class="text-gray-400 hover:text-white transition-colors">Student Login</a></li>
                        <li><a href="{{ route('admin.login') }}" class="text-gray-400 hover:text-white transition-colors">Admin Panel</a></li>
                        <li><a href="{{ route('results') }}" class="text-gray-400 hover:text-white transition-colors">Election Results</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Features</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>✅ Secure Authentication</li>
                        <li>✅ Real-time Results</li>
                        <li>✅ Mobile Responsive</li>
                        <li>✅ Easy Administration</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-400">
                    Developed with ❤️ for educational and organizational voting needs.
                </p>
                <p class="text-gray-500 text-sm mt-2">
                    University of ... – Innovation in Democratic Engagement
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
