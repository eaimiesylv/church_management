@props([
    'expandable' => false,
    'expanded' => true,
    'heading' => null,
])

<?php if ($expandable && $heading): ?>

    <div {{ $attributes->class('group mb-1') }}>
        <button type="button" class="flex items-center w-full rounded-lg text-zinc-500 hover:bg-zinc-50 hover:text-zinc-800 p-2">
            <svg class="h-4 w-4 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            <span class="text-sm font-medium leading-none">{{ $heading }}</span>
        </button>

        <div class="mt-2 ps-4">
            {{ $slot }}
        </div>
    </div>

<?php elseif ($heading): ?>

    <div {{ $attributes->class('block space-y-2') }}>
        <div class="px-1 py-2">
            <div class="text-xs leading-none text-zinc-400">{{ $heading }}</div>
        </div>

        <div>
            {{ $slot }}
        </div>
    </div>

<?php else: ?>

    <div {{ $attributes->class('block space-y-2') }}>
        {{ $slot }}
    </div>

<?php endif; ?>
