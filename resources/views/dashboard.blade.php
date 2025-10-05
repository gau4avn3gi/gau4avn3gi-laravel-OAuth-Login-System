<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            👋 Welcome, {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-10 bg-gradient-to-br from-indigo-50 to-blue-100 min-h-screen">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl rounded-2xl overflow-hidden border border-gray-200">

                <!-- Top Section -->
                <div class="bg-gradient-to-r from-indigo-600 to-blue-500 p-8 text-white flex items-center space-x-6">
                    <img src="{{ Auth::user()->avatar ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) . '&background=random' }}"
                         alt="Profile Picture"
                         class="w-24 h-24 rounded-full border-4 border-white shadow-lg">

                    <div>
                        <h1 class="text-2xl font-bold">{{ Auth::user()->name }}</h1>
                        <p class="text-sm text-blue-100 mt-1">{{ Auth::user()->email }}</p>
                        <p class="text-sm mt-2">
                            <span class="bg-white text-indigo-700 px-2 py-1 rounded-md font-medium">
                                {{ ucfirst(Auth::user()->provider ?? 'Local') }} Login
                            </span>
                        </p>
                    </div>
                </div>

                <!-- Info Section -->
                <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-700 mb-3">📅 Account Details</h3>
                        <ul class="text-gray-600 space-y-2">
                            <li><strong>Member Since:</strong> {{ Auth::user()->created_at->format('F j, Y') }}</li>
                            <li><strong>Last Login:</strong> {{ Auth::user()->updated_at->diffForHumans() }}</li>
                            <li><strong>User ID:</strong> #{{ Auth::user()->id }}</li>
                        </ul>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-700 mb-3">📊 Activity Overview</h3>
                        <p class="text-gray-600">
                            You’ve been active recently. Keep exploring and managing your projects efficiently.
                            <span class="block mt-2 text-sm text-indigo-600">More analytics coming soon...</span>
                        </p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="border-t p-6 flex justify-between items-center">
                    <a href="{{ route('social.redirect') }}"
                       class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-700 transition">
                        🔗 Connect another account
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="px-4 py-2 bg-red-600 text-white font-semibold rounded-lg shadow hover:bg-red-700 transition">
                            🔒 Logout
                        </button>
                    </form>
                </div>

                <!-- Footer -->
                <div class="bg-gray-100 text-center py-4 text-sm text-gray-500">
                    Developed by
                    <a href="https://www.linkedin.com/in/gaurav-negi" target="_blank" class="text-indigo-600 font-medium hover:underline">
                        Gaurav Negi
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
