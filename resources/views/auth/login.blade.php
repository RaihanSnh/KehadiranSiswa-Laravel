<x-guest-layout>
    <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ __('Log in') }}</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="mb-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded bg-dark-gray border-gray-300 text-bright-orange shadow-sm focus:ring-bright-orange dark:bg-gray-900 dark:border-gray-700 dark:text-indigo-600 dark:focus:ring-indigo-500 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex justify-between items-center">
            <div class="text-sm">
                @if (Route::has('password.request'))
                    <a class="text-bright-orange hover:text-sky-blue dark:text-sky-blue dark:hover:text-bright-orange" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="flex items-center justify-center">
                <x-primary-button class="bg-bright-orange">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </div>

    </form>

    <div class="mt-4 flex justify-center">
        @if (Route::has('register'))
            <a class="text-sm text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300" href="{{ route('register') }}">{{ __('Create an account') }}</a>
        @endif
    </div>
</x-guest-layout>
