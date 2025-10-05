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

        <!-- Right Form Section -->
        <div class="flex items-center justify-center w-full lg:w-1/2 bg-white px-6 py-12">
            <div class="w-full max-w-md space-y-8">
                <!-- Header -->
                <div class="text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-2">Create Your Account</h2>
                    <p class="text-gray-500 text-sm">
                        Already have an account?
                        <a href="{{ route('login') }}" class="text-indigo-600 font-semibold hover:underline">
                            Login here
                        </a>
                    </p>
                </div>

                <!-- Register Form -->
                <form method="POST" action="{{ route('register') }}" class="space-y-6">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Full Name')" class="text-gray-700" />
                        <x-text-input id="name" class="block mt-2 w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                      type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email -->
                    <div>
                        <x-input-label for="email" :value="__('Email Address')" class="text-gray-700" />
                        <x-text-input id="email" class="block mt-2 w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                      type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" class="text-gray-700" />
                        <x-text-input id="password" class="block mt-2 w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                      type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-700" />
                        <x-text-input id="password_confirmation" class="block mt-2 w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                      type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <!-- Register Button -->
                    <div>
                        <button type="submit"
                                class="w-full py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-lg shadow-md hover:from-indigo-700 hover:to-purple-700 transform hover:-translate-y-0.5 transition-all duration-300">
                            {{ __('Register') }}
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
                            <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-5 h-5">
                            <span class="font-medium text-gray-700">Sign Up with Google</span>
                        </a>
                    </div>
                </form>

                <!-- Footer -->
                <p class="text-center text-gray-500 text-sm mt-8">
                    © {{ date('Y') }} Developed by
                    <a href="https://www.linkedin.com/in/gaurav-negi" target="_blank"
                       class="text-indigo-600 font-semibold hover:text-indigo-800 hover:underline transition-all duration-300">
                        Gaurav Negi
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
