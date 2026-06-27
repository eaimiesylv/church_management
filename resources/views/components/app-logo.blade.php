@props([
    'sidebar' => false,
])

@if($sidebar)
    <a href="{{ route('home') }}" {{ $attributes->merge(['class' => 'flex items-center gap-2']) }}>
        <span class="flex aspect-square h-8 w-8 items-center justify-center rounded-md bg-indigo-600 text-white">
            <x-app-logo-icon class="h-5 w-5 fill-current text-white" />
        </span>
        <span class="sr-only">{{ config('app.name', 'Laravel Starter Kit') }}</span>
    </a>
@else
    <a href="{{ route('home') }}" {{ $attributes->merge(['class' => 'flex items-center gap-2']) }}>
        <span class="flex aspect-square h-8 w-8 items-center justify-center rounded-md bg-indigo-600 text-white">
            <x-app-logo-icon class="h-5 w-5 fill-current text-white" />
        </span>
        <span class="sr-only">{{ config('app.name', 'Laravel Starter Kit') }}</span>
    </a>
@endif
