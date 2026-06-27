<x-layouts::auth :title="__('Log in')">
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Log in to your account')" :description="__('Enter your email and password below to log in')" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />


        <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-6">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Email address') }}</label>
                <input id="email" name="email" value="{{ old('email') }}" type="email" required autofocus autocomplete="email" placeholder="email@example.com" class="mt-1 block w-full rounded-md border-gray-300 bg-white text-zinc-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-neutral-800 dark:border-neutral-700 dark:text-white" />
                @error('email') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Password -->
            <div class="relative">
                <div>
                    <label for="password" class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Password') }}</label>
                    <input id="password" name="password" type="password" required autocomplete="current-password" placeholder="{{ __('Password') }}" class="mt-1 block w-full rounded-md border-gray-300 bg-white text-zinc-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-neutral-800 dark:border-neutral-700 dark:text-white" />
                    @error('password') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="absolute top-0 text-sm end-0 text-indigo-600 hover:underline">{{ __('Forgot your password?') }}</a>
                @endif
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }} class="h-4 w-4 text-indigo-600 border-gray-300 rounded" />
                <label for="remember" class="ml-2 block text-sm text-zinc-600 dark:text-zinc-300">{{ __('Remember me') }}</label>
            </div>

            <div class="flex items-center justify-end">
                <button type="submit" class="w-full inline-flex items-center justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none" data-test="login-button">{{ __('Log in') }}</button>
            </div>
        </form>

        <div class="space-x-1 text-sm text-center rtl:space-x-reverse text-zinc-600 dark:text-zinc-400">
           <span>{{ __("Don't have an account?") }}</span>
            <a href="{{ route('register') }}" class="text-indigo-600 hover:underline">{{ __('Sign up') }}</a>
        </div>
    </div>
</x-layouts::auth>
