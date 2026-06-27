<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <aside class="hidden lg:flex lg:flex-col lg:w-64 border-e border-zinc-200 bg-white dark:bg-zinc-900 dark:border-zinc-700">
            <div class="flex items-center justify-between px-4 py-3">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
                    <x-app-logo :sidebar="true" />
                </a>
                <!-- collapse button (mobile handled elsewhere) -->
                <button class="lg:hidden p-2 rounded-md hover:bg-neutral-100 dark:hover:bg-neutral-800" aria-label="Collapse sidebar">
                    <svg class="h-5 w-5 text-zinc-600 dark:text-zinc-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <nav class="px-3 py-4">
                <div class="mb-4">
                    <p class="px-3 text-xs font-semibold text-zinc-500 uppercase">{{ __('Platform') }}</p>
                    <ul class="mt-2 space-y-1">
                        <li>
                            <a href="{{ route('dashboard') }}" class="flex items-center gap-2 px-3 py-2 rounded-md text-sm text-zinc-700 hover:bg-neutral-100 dark:text-zinc-200 dark:hover:bg-neutral-800 {{ request()->routeIs('dashboard') ? 'bg-neutral-100 dark:bg-neutral-800' : '' }}">
                                <svg class="h-4 w-4 text-zinc-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6"/></svg>
                                <span>{{ __('Dashboard') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="mt-6">
                    <ul class="space-y-1">
                        <li>
                            <a href="https://github.com/laravel/livewire-starter-kit" target="_blank" class="flex items-center gap-2 px-3 py-2 rounded-md text-sm text-zinc-700 hover:bg-neutral-100 dark:text-zinc-200 dark:hover:bg-neutral-800">
                                <svg class="h-4 w-4 text-zinc-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3 7h7l-5.5 4 2 7L12 17l-6.5 3 2-7L2 9h7l3-7z"/></svg>
                                <span>{{ __('Repository') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://laravel.com/docs/starter-kits#livewire" target="_blank" class="flex items-center gap-2 px-3 py-2 rounded-md text-sm text-zinc-700 hover:bg-neutral-100 dark:text-zinc-200 dark:hover:bg-neutral-800">
                                <svg class="h-4 w-4 text-zinc-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8"/></svg>
                                <span>{{ __('Documentation') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="mt-auto px-3 pb-4">
                <x-desktop-user-menu class="hidden lg:block" :name="auth()->user()->name" />
            </div>
        </aside>

        <!-- Mobile User Menu -->
        <div class="lg:hidden border-t border-neutral-200 dark:border-neutral-800 bg-white dark:bg-zinc-900">
            <div class="px-4 py-3">
                <div class="flex items-center gap-3">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-indigo-600 text-white">{{ auth()->user()->initials() }}</span>
                    <div class="text-sm">
                        <div class="font-medium text-zinc-900 dark:text-zinc-100">{{ auth()->user()->name }}</div>
                        <div class="text-xs text-zinc-500 dark:text-zinc-400">{{ auth()->user()->email }}</div>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('profile.edit') }}" class="block px-3 py-2 rounded-md text-sm text-zinc-700 hover:bg-neutral-100 dark:text-zinc-200 dark:hover:bg-neutral-800">{{ __('Settings') }}</a>
                    <form method="POST" action="{{ route('logout') }}" class="mt-2">
                        @csrf
                        <button type="submit" class="w-full text-left px-3 py-2 rounded-md text-sm text-zinc-700 hover:bg-neutral-100 dark:text-zinc-200 dark:hover:bg-neutral-800">{{ __('Log out') }}</button>
                    </form>
                </div>
            </div>
        </div>

        {{ $slot }}

        {{-- Toasts removed (Flux) — use session flash or Livewire notifications instead. --}}

        @livewireScripts
    </body>
</html>
