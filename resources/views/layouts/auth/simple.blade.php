<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white antialiased dark:bg-linear-to-b dark:from-neutral-950 dark:to-neutral-900">
        <div class="bg-background flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
            <div class="flex w-full max-w-lg flex-col gap-4">
                <a href="{{ route('home') }}" class="flex flex-col items-center gap-2 font-medium" wire:navigate>
                    <span class="flex h-10 w-10 mb-1 items-center justify-center rounded-md bg-indigo-600 text-white">
                        <x-app-logo-icon class="h-6 w-6 fill-current text-white" />
                    </span>
                    <span class="sr-only">{{ config('app.name', 'Laravel') }}</span>
                </a>

                <div class="rounded-xl border bg-white dark:bg-neutral-900 dark:border-neutral-800 px-8 py-8 shadow-md text-zinc-900 dark:text-zinc-100">
                    {{ $slot }}
                </div>
            </div>
        </div>

        {{-- Toasts placeholder (Flux removed). Use Livewire / session flashes instead. --}}

        @livewireScripts
    </body>
</html>
