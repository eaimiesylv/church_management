<x-layouts::auth :title="__('Email verification')">
    <div class="mt-4 flex flex-col gap-6">
        <p class="text-center text-zinc-600">{{ __('Please verify your email address by clicking on the link we just emailed to you.') }}</p>

        @if (session('status') == 'verification-link-sent')
            <p class="text-center font-medium !dark:text-green-400 !text-green-600">{{ __('A new verification link has been sent to the email address you provided during registration.') }}</p>
        @endif

        <div class="flex flex-col items-center justify-between space-y-3">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="w-full inline-flex items-center justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none">{{ __('Resend verification email') }}</button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm text-zinc-600 hover:underline" data-test="logout-button">{{ __('Log out') }}</button>
            </form>
        </div>
    </div>
</x-layouts::auth>
