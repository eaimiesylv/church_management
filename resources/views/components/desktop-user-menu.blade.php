<div x-data="{open:false}" class="relative inline-block text-left">
    <div>
        <button @click="open = !open" type="button" class="inline-flex items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-neutral-100 dark:hover:bg-neutral-800" id="menu-button" aria-expanded="true" aria-haspopup="true">
            <span class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-indigo-600 text-white">{{ auth()->user()->initials() }}</span>
            <span class="hidden md:inline-block text-sm text-zinc-700 dark:text-zinc-200">{{ auth()->user()->name }}</span>
            <svg class="h-4 w-4 text-zinc-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.584l3.71-4.354a.75.75 0 111.14.976l-4.25 5a.75.75 0 01-1.14 0l-4.25-5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
        </button>
    </div>

    <div x-show="open" x-on:click.outside="open = false" x-cloak class="absolute right-0 mt-2 w-56 rounded-md bg-white dark:bg-neutral-900 border dark:border-neutral-800 shadow-lg z-50">
        <div class="p-3">
            <div class="flex items-center gap-3">
                <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-indigo-600 text-white">{{ auth()->user()->initials() }}</span>
                <div class="text-sm">
                    <div class="font-medium text-zinc-900 dark:text-zinc-100">{{ auth()->user()->name }}</div>
                    <div class="text-xs text-zinc-500 dark:text-zinc-400">{{ auth()->user()->email }}</div>
                </div>
            </div>
        </div>
        <div class="border-t border-neutral-100 dark:border-neutral-800">
            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-zinc-700 hover:bg-neutral-100 dark:text-zinc-200 dark:hover:bg-neutral-800">{{ __('Settings') }}</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left px-4 py-2 text-sm text-zinc-700 hover:bg-neutral-100 dark:text-zinc-200 dark:hover:bg-neutral-800">{{ __('Log out') }}</button>
            </form>
        </div>
    </div>
</div>
