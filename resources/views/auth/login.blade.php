<x-guest-layout>
    <div class="min-h-screen flex flex-col lg:flex-row">
        <!-- Left Image Section -->
        <div class="hidden lg:flex w-1/2 bg-cover bg-center relative"
            style="background-image: url('https://freedesignfile.com/upload/2017/09/mountain-sunrise-landscape-nature-background-vector-08.jpg');">
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/20"></div>
            <div class="relative z-10 flex flex-col justify-center px-12 text-white">
                <h1 class="text-4xl font-bold mb-4">Laravel OAuth 🚀</h1>
                <p class="text-lg text-gray-200 leading-relaxed">
                    Use Laravel's Socialite package to implement OAuth login so users can sign in with Google, Facebook,
                    and other social providers.
                    Socialite handles the OAuth flow and callbacks, making it easy to create or link local user
                    accounts.
                </p>

            </div>
        </div>

        <!-- Right Login Section -->
        <div class="flex items-center justify-center w-full lg:w-1/2 bg-white px-6 py-12">
            <div class="w-full max-w-md space-y-8">
                <!-- Logo -->
                <div class="text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-2">Sign in to your account</h2>
                    @if (Route::has('register'))
                    <p class="text-gray-500">Or <a href="{{ route('register') }}"
                            class="text-indigo-600 font-semibold hover:underline">create a new one</a></p>
                    @endif
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Email -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
                        <x-text-input id="email"
                            class="block mt-2 w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                            type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" class="text-gray-700" />
                        <x-text-input id="password"
                            class="block mt-2 w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                            type="password" name="password" required />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me + Forgot Password -->
                    <div class="flex items-center justify-between">
                        <label for="remember_me" class="flex items-center text-sm text-gray-600">
                            <input id="remember_me" type="checkbox" name="remember"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                            <span class="ml-2">Remember me</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="text-sm text-indigo-600 hover:text-indigo-800 font-medium">
                                Forgot password?
                            </a>
                        @endif
                    </div>

                    <!-- Login Button -->
                    <div>
                        <button type="submit"
                            class="w-full py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-lg shadow-md hover:from-indigo-700 hover:to-purple-700 transform hover:-translate-y-0.5 transition-all duration-300">
                            {{ __('Log In') }}
                        </button>
                    </div>

                    <!-- Divider -->
                    <div class="flex items-center justify-center my-6">
                        <div class="flex-grow border-t border-gray-300"></div>
                        <span class="px-3 text-sm text-gray-500">or</span>
                        <div class="flex-grow border-t border-gray-300"></div>
                    </div>

                    <!-- Google Login -->
                    <div>
                        <a href="{{ route('social.redirect') }}"
                            class="w-full flex items-center justify-center gap-3 border border-gray-300 py-2.5 rounded-lg bg-white hover:bg-gray-100 transition duration-300">
                            <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google"
                                class="w-5 h-5">
                            <span class="font-medium text-gray-700">Login with Google</span>
                        </a>
                    </div>
                </form>

                <!-- Footer -->
                {{-- <p class="text-center text-gray-500 text-sm mt-6">
                    &copy; {{ date('Y') }} Your Company. All rights reserved.
                </p> --}}
                <p class="text-center text-sm text-gray-500 mt-8">
                    © {{ date('Y') }} Developed by
                    <a href="https://www.linkedin.com/in/gaurav-negi-02a198108/" target="_blank"
                       class="text-indigo-600 font-semibold hover:text-indigo-800 transition duration-300">
                        Gaurav Negi
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
