<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white">
        <header class="border-b border-zinc-200 bg-white dark:border-zinc-700 dark:bg-zinc-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center">
                    <button class="lg:hidden mr-2 p-2 rounded-md hover:bg-neutral-100 dark:hover:bg-neutral-800" aria-label="Open sidebar">
                        <svg class="h-6 w-6 text-zinc-600 dark:text-zinc-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>

                    <div class="flex items-center">
                        <a href="{{ route('dashboard') }}"><x-app-logo /></a>
                    </div>

                    <nav class="hidden lg:flex lg:ml-6">
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-zinc-700 hover:text-zinc-900 dark:text-zinc-200">{{ __('Dashboard') }}</a>
                    </nav>

                    <div class="ml-auto flex items-center space-x-3">
                        <a href="#" class="p-2 rounded-md hover:bg-neutral-100 dark:hover:bg-neutral-800 text-zinc-600 dark:text-zinc-300" title="Search">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M10.5 18a7.5 7.5 0 100-15 7.5 7.5 0 000 15z"/></svg>
                        </a>

                        <a href="https://github.com/laravel/livewire-starter-kit" target="_blank" class="hidden lg:inline-flex p-2 rounded-md hover:bg-neutral-100 dark:hover:bg-neutral-800 text-zinc-600 dark:text-zinc-300" title="Repository">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .5a12 12 0 00-3.8 23.4c.6.1.8-.3.8-.6v-2.1c-3.3.7-4-1.6-4-1.6-.5-1.3-1.2-1.6-1.2-1.6-1-.7.1-.7.1-.7 1.2.1 1.9 1.2 1.9 1.2 1 .1 1.6.7 1.9 1 .1-.8.4-1.3.8-1.6-2.6-.3-5.3-1.3-5.3-5.8 0-1.3.5-2.3 1.2-3.1-.1-.3-.5-1.5.1-3 0 0 1-.3 3.4 1.2a11.8 11.8 0 016.2 0C18 6 19 6.3 19 6.3c.6 1.6.2 2.8.1 3 .8.8 1.2 1.8 1.2 3.1 0 4.5-2.8 5.4-5.4 5.7.4.3.7 1 .7 2v3c0 .3.2.7.8.6A12 12 0 0012 .5z"/></svg>
                        </a>

                        <a href="https://laravel.com/docs/starter-kits#livewire" target="_blank" class="hidden lg:inline-flex p-2 rounded-md hover:bg-neutral-100 dark:hover:bg-neutral-800 text-zinc-600 dark:text-zinc-300" title="Documentation">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8"/></svg>
                        </a>

                        <x-desktop-user-menu />
                    </div>
                </div>
            </div>
        </header>

        <!-- Mobile Menu -->
        <div class="lg:hidden border-t border-neutral-200 dark:border-neutral-800 bg-white dark:bg-zinc-900">
            <div class="px-4 py-3">
                <nav>
                    <ul class="space-y-1">
                        <li>
                            <a href="{{ route('dashboard') }}" class="flex items-center gap-2 px-3 py-2 rounded-md text-sm text-zinc-700 hover:bg-neutral-100 dark:text-zinc-200 dark:hover:bg-neutral-800">{{ __('Dashboard') }}</a>
                        </li>
                        <li>
                            <a href="https://github.com/laravel/livewire-starter-kit" target="_blank" class="flex items-center gap-2 px-3 py-2 rounded-md text-sm text-zinc-700 hover:bg-neutral-100 dark:text-zinc-200 dark:hover:bg-neutral-800">{{ __('Repository') }}</a>
                        </li>
                        <li>
                            <a href="https://laravel.com/docs/starter-kits#livewire" target="_blank" class="flex items-center gap-2 px-3 py-2 rounded-md text-sm text-zinc-700 hover:bg-neutral-100 dark:text-zinc-200 dark:hover:bg-neutral-800">{{ __('Documentation') }}</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        {{ $slot }}

        {{-- Toasts removed (Flux) — use session flash or Livewire notifications instead. --}}

        @livewireScripts
    </body>
</html>
