<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-white">
        <div>
            <a href="/">
                <img class="w-32 h-auto" src="{{asset('images/logo.jpg')}}" alt="logo">
            </a>
        </div>

        <div class="w-full sm:max-w-xl mt-6 px-8 py-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" class="text-gray-700"/>
                    <x-text-input id="name" class="block mt-1 w-full border-gray-300 focus:border-[#00bdb5] focus:ring-[#00bdb5] rounded-md shadow-sm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700"/>
                    <x-text-input id="email" class="block mt-1 w-full border-gray-300 focus:border-[#00bdb5] focus:ring-[#00bdb5] rounded-md shadow-sm" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700"/>
                    <x-text-input id="password" class="block mt-1 w-full border-gray-300 focus:border-[#00bdb5] focus:ring-[#00bdb5] rounded-md shadow-sm"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-700"/>
                    <x-text-input id="password_confirmation" class="block mt-1 w-full border-gray-300 focus:border-[#00bdb5] focus:ring-[#00bdb5] rounded-md shadow-sm"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-6">
                    <a class="underline text-sm text-gray-600 hover:text-[#00bdb5] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#00bdb5]" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ms-4 bg-[#00bdb5] hover:bg-white hover:text-[#00bdb5] border border-[#00bdb5]">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
