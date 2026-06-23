<!-- Reusable header partial -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur border-b border-slate-200">
    <div class="w-full max-w-[1400px] mx-auto px-4 py-3 flex items-center justify-between">

        <!-- Logo + Name -->
        <div class="flex items-center gap-3 flex-shrink-0">
            @if (file_exists(public_path('logo.jpg')))
                <a href="{{ url('/') }}" class="block">
                    <img src="{{ asset('logo.jpg') }}" alt="{{ config('app.name') }} logo" class="h-10 w-auto">
                </a>
            @endif
            <div class="flex flex-col leading-none">
                <a href="{{ url('/') }}" class="font-bold text-lg md:text-2xl text-blue-900">{{ config('app.name', 'GOSPEL LIBERATION') }}</a>
                <span class="text-xs text-slate-500 hidden sm:block">DIVINE APOSTOLIC ASSEMBLY INTERNATIONAL</span>
            </div>
        </div>

        <!-- Hamburger Button (mobile only) -->
        <button id="menuToggle" type="button"
            class="md:hidden flex flex-col justify-center items-center w-10 h-10 rounded-lg border border-slate-200 gap-1.5 focus:outline-none focus:ring-2 focus:ring-blue-500"
            aria-label="Toggle menu" aria-expanded="false">
            <span class="block w-5 h-0.5 bg-slate-700 transition-all duration-300" id="bar1"></span>
            <span class="block w-5 h-0.5 bg-slate-700 transition-all duration-300" id="bar2"></span>
            <span class="block w-5 h-0.5 bg-slate-700 transition-all duration-300" id="bar3"></span>
        </button>

        <!-- Desktop Nav Links -->
        <div class="hidden md:flex gap-6 items-center">
            <a href="{{ route('home') }}" class="hover:text-blue-700 text-sm font-medium">Home</a>
            <a href="{{ url('/events') }}" class="hover:text-blue-700 text-sm font-medium">Events</a>
            <a href="{{ url('/contact') }}" class="hover:text-blue-700 text-sm font-medium">Contact Us</a>
            <a href="{{ url('/locations') }}" class="hover:text-blue-700 text-sm font-medium">Church Location</a>
        </div>

        <!-- Desktop Auth Buttons -->
        <div class="hidden md:flex gap-3">
            <a href="{{ route('login') }}"    class="px-5 py-2 border border-slate-300 rounded-lg text-sm font-medium hover:border-blue-500 hover:text-blue-700 transition">Login</a>
            <a href="{{ route('register') }}" class="px-5 py-2 bg-blue-900 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition">Join Us</a>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden hidden border-t border-slate-100 bg-white">
        <div class="flex flex-col px-4 py-4 gap-1">
            <a href="{{ route('home') }}" class="py-2.5 px-3 rounded-lg hover:bg-slate-50 hover:text-blue-700 text-sm font-medium transition" onclick="closeMobileMenu()">Home</a>
            <a href="{{ url('/events') }}" class="py-2.5 px-3 rounded-lg hover:bg-slate-50 hover:text-blue-700 text-sm font-medium transition" onclick="closeMobileMenu()">Events</a>
            <a href="{{ url('/contact') }}" class="py-2.5 px-3 rounded-lg hover:bg-slate-50 hover:text-blue-700 text-sm font-medium transition" onclick="closeMobileMenu()">Contact Us</a>
            <a href="{{ url('/locations') }}" class="py-2.5 px-3 rounded-lg hover:bg-slate-50 hover:text-blue-700 text-sm font-medium transition" onclick="closeMobileMenu()">Church Location</a>
            <div class="border-t border-slate-100 mt-3 pt-3 flex flex-col gap-2">
                <a href="{{ route('login') }}"    class="w-full text-center py-2.5 border border-slate-300 rounded-lg text-sm font-medium hover:border-blue-500 hover:text-blue-700 transition">Login</a>
                <a href="{{ route('register') }}" class="w-full text-center py-2.5 bg-blue-900 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition">Join Us</a>
            </div>
        </div>
    </div>
</nav>
