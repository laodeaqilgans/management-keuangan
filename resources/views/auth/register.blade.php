<x-guest-layout>
    <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0 bg-gray-50">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden rounded-xl">
            <!-- Logo atau Judul -->
            <div class="mb-8 text-center">
                <h2 class="text-2xl font-bold text-gray-700">Create Account</h2>
                <p class="text-sm text-gray-500 mt-2">Join us today! Please enter your details</p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-6">
                    <x-input-label for="name" :value="__('Full Name')" class="text-gray-700" />
                    <x-text-input id="name" class="block mt-1 w-full px-4 py-2 rounded-lg border focus:border-indigo-500 focus:ring-indigo-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your full name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mb-6">
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
                    <x-text-input id="email" class="block mt-1 w-full px-4 py-2 rounded-lg border focus:border-indigo-500 focus:ring-indigo-500" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Enter your email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700" />
                    <div class="relative">
                        <x-text-input id="password" class="block mt-1 w-full px-4 py-2 rounded-lg border focus:border-indigo-500 focus:ring-indigo-500"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password"
                                    placeholder="Create a password" />
                        <button type="button" class="absolute right-2 top-1/2 transform -translate-y-1/2" onclick="togglePassword('password')">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-700" />
                    <div class="relative">
                        <x-text-input id="password_confirmation" class="block mt-1 w-full px-4 py-2 rounded-lg border focus:border-indigo-500 focus:ring-indigo-500"
                                    type="password"
                                    name="password_confirmation" 
                                    required autocomplete="new-password"
                                    placeholder="Confirm your password" />
                        <button type="button" class="absolute right-2 top-1/2 transform -translate-y-1/2" onclick="togglePassword('password_confirmation')">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex flex-col gap-4">
                    <x-primary-button class="w-full justify-center py-3 bg-indigo-600 hover:bg-indigo-700">
                        {{ __('Create Account') }}
                    </x-primary-button>

                    <p class="text-center text-sm text-gray-600">
                        Already have an account?
                        <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">
                            Sign in
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
