<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ __('Welcome') }} - {{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            /* Remove any default body/html margin that could cause a horizontal gap */
            html, body {
                margin: 0;
                padding: 0;
                overflow-x: hidden;
                width: 100%;
            }
        </style>
    </head>
    <body class="bg-white text-slate-800 antialiased flex flex-col min-h-screen">

<!-- ===== NAVIGATION ===== -->
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
            <a href="#about"       class="hover:text-blue-700 text-sm font-medium">About</a>
            <a href="#events"      class="hover:text-blue-700 text-sm font-medium">Events</a>
            <a href="#gallery"     class="hover:text-blue-700 text-sm font-medium">Gallery</a>
            <a href="#contact"     class="hover:text-blue-700 text-sm font-medium">Contact Us</a>
            <a href="#location"    class="hover:text-blue-700 text-sm font-medium">Church Branches</a>
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
            <a href="#about"       class="py-2.5 px-3 rounded-lg hover:bg-slate-50 hover:text-blue-700 text-sm font-medium transition" onclick="closeMobileMenu()">About</a>
            <a href="#testimonies" class="py-2.5 px-3 rounded-lg hover:bg-slate-50 hover:text-blue-700 text-sm font-medium transition" onclick="closeMobileMenu()">Testimonies</a>
            <a href="#events"      class="py-2.5 px-3 rounded-lg hover:bg-slate-50 hover:text-blue-700 text-sm font-medium transition" onclick="closeMobileMenu()">Events</a>
            <a href="#gallery"     class="py-2.5 px-3 rounded-lg hover:bg-slate-50 hover:text-blue-700 text-sm font-medium transition" onclick="closeMobileMenu()">Gallery</a>
            <a href="#contact"     class="py-2.5 px-3 rounded-lg hover:bg-slate-50 hover:text-blue-700 text-sm font-medium transition" onclick="closeMobileMenu()">Contact Us</a>
            <a href="#location"    class="py-2.5 px-3 rounded-lg hover:bg-slate-50 hover:text-blue-700 text-sm font-medium transition" onclick="closeMobileMenu()">Church Branches</a>
            <div class="border-t border-slate-100 mt-3 pt-3 flex flex-col gap-2">
                <a href="{{ route('login') }}"    class="w-full text-center py-2.5 border border-slate-300 rounded-lg text-sm font-medium hover:border-blue-500 hover:text-blue-700 transition">Login</a>
                <a href="{{ route('register') }}" class="w-full text-center py-2.5 bg-blue-900 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition">Join Us</a>
            </div>
        </div>
    </div>
</nav>

<!-- ===== HERO — TRUE FULL WIDTH ===== -->

<div style="padding-top: 65px;">
    <section style="
        display:block;
        width:100vw;
        margin:0;
        padding:0;
        position:relative;
        left:50%;
        right:50%;
        margin-left:-50vw;
        margin-right:-50vw;
        height:clamp(180px,31.25vw,600px);
        overflow:hidden;
        background-image: url('{{ asset('banner1.jpeg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    ">
        <!-- Dark overlay so text stays readable -->
        <div style="position:absolute;inset:0;background:rgba(0,0,0,0.4);"></div>
        <!-- CTA buttons -->
        <div style="position:absolute;inset:0;display:flex;flex-direction:column;align-items:center;justify-content:center;z-index:10;text-align:center;padding:0 16px;">
            <span class="bg-white/20 backdrop-blur-sm px-4 py-1.5 rounded-full text-white text-xs sm:text-sm md:text-base font-medium">
                Welcome To {{ config('app.name', 'GOSPEL LIBERATION') }}
            </span>
            <div class="mt-4 md:mt-6 flex flex-wrap justify-center gap-2 md:gap-4">
                <a href="#about"  class="bg-blue-600 text-white px-5 sm:px-8 py-2.5 sm:py-4 rounded-xl font-semibold transition transform hover:-translate-y-1 text-xs sm:text-sm md:text-base shadow-lg">Learn More</a>
                <a href="#events" class="bg-white text-slate-900 px-5 sm:px-8 py-2.5 sm:py-4 rounded-xl font-semibold transition transform hover:-translate-y-1 text-xs sm:text-sm md:text-base shadow-lg">Upcoming Events</a>
            </div>
        </div>
    </section>
</div>

<!-- ===== MAIN LAYOUT ===== -->
<div class="w-full max-w-[1400px] mx-auto px-4 md:px-6 py-12 md:py-16 flex flex-col lg:flex-row items-stretch gap-10 flex-1">

    <!-- ===== MAIN CONTENT 3/5 ===== -->
    <main class="w-full lg:w-3/5 space-y-16 md:space-y-24 h-full">

        <!-- About -->
        <section id="about" class="py-4">
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-bold">Who We Are</h2>
                <p class="mt-4 text-slate-600 max-w-3xl mx-auto text-sm md:text-base">
                    We are a Christ-centered church committed to worship, discipleship, evangelism and community impact.
                </p>
            </div>
            <div class="grid sm:grid-cols-2 gap-6 md:gap-8">
                <div class="bg-white shadow-xl rounded-3xl p-8 md:p-10 transition hover:shadow-2xl">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4 md:mb-6 text-blue-900">Our Mission</h3>
                    <ul class="list-disc list-inside leading-8 text-slate-600 text-sm md:text-base space-y-1">
                        <li>To magnify God through worship</li>
                        <li>To spread the gospel with power</li>
                        <li>Building membership and fellowship of the brethren to disciples for ministry</li>
                        <li>To Make heaven</li>
                    </ul>
                </div>
                <div class="bg-white shadow-xl rounded-3xl p-8 md:p-10 transition hover:shadow-2xl">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4 md:mb-6 text-blue-900">Our Vision</h3>
                    <p class="leading-8 text-slate-600 text-sm md:text-base">
                        Raising total men in righteousness and making them earthly and heavenly relevant for God.
                    </p>
                </div>
            </div>
            <div class="grid sm:grid-cols-2 gap-6 md:gap-8 mt-6 md:mt-8">
                <div class="bg-white shadow-xl rounded-3xl p-8 md:p-10 transition hover:shadow-2xl">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4 md:mb-6 text-blue-900">Our Mandate</h3>
                    <ul class="list-disc list-inside leading-8 text-slate-600 text-sm md:text-base space-y-1">
                        <li>To proclaim total liberty through His word and prayer (Isaiah 61:1-3)</li>
                        <li>Bring them in (Evangelism)</li>
                        <li>Build them up (develop their gift)</li>
                        <li>Train them forth (discipleship/leadership)</li>
                        <li>Send them out (mission)</li>
                    </ul>
                </div>
                <div class="bg-white shadow-xl rounded-3xl p-8 md:p-10 transition hover:shadow-2xl">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4 md:mb-6 text-blue-900">Training Programme</h3>
                    <ul class="list-disc list-inside leading-8 text-slate-600 text-sm md:text-base space-y-1">
                        <li>Baptismal Class</li>
                        <li>Worker in training program</li>
                        <li>Leadership/discipleship training program</li>
                        <li>Minister's Conferences/Bible School</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Service Times -->
        <section class="bg-slate-50 rounded-3xl p-6 md:p-8">
            <div class="text-center mb-6">
                <h2 class="text-3xl md:text-4xl font-bold">Service Schedule</h2>
            </div>
            <div class="grid sm:grid-cols-3 gap-4 md:gap-6">
                <div class="bg-white p-5 md:p-6 rounded-2xl shadow transition transform hover:scale-105">
                    <h3 class="font-bold text-xl md:text-2xl">Sunday Worship</h3>
                    <p class="mt-3 text-slate-600 text-sm md:text-base">9:00 AM</p>
                </div>
                <div class="bg-white p-5 md:p-6 rounded-2xl shadow transition transform hover:scale-105">
                    <h3 class="font-bold text-xl md:text-2xl">Bible Study</h3>
                    <p class="mt-3 text-slate-600 text-sm md:text-base">Wednesday 6:00 PM</p>
                </div>
                <div class="bg-white p-5 md:p-6 rounded-2xl shadow transition transform hover:scale-105">
                    <h3 class="font-bold text-xl md:text-2xl">Prayer Meeting</h3>
                    <p class="mt-3 text-slate-600 text-sm md:text-base">Friday 6:00 PM</p>
                </div>
            </div>
        </section>

        <!-- Location -->
        <section id="location" class="py-4">
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-bold">Church Location</h2>
                <p class="mt-3 text-slate-600 text-sm md:text-base">Find a campus near you.</p>
            </div>
            <div class="flex items-center justify-between mb-5 flex-wrap gap-3">
                <div class="flex items-center gap-3">
                    <span id="locCounter" class="text-sm font-bold text-blue-900 bg-blue-50 border border-blue-200 px-4 py-1.5 rounded-full">1 / 4</span>
                    <div id="locDots" class="flex gap-2 items-center"></div>
                </div>
                <div class="flex gap-3">
                    <button id="locPrev" type="button"
                        class="bg-white border-2 border-slate-300 hover:border-blue-600 hover:bg-blue-50 hover:text-blue-700 text-slate-700 font-semibold px-4 md:px-6 py-2.5 md:py-3 rounded-xl transition-all duration-200 text-sm shadow">
                        &#8592; Prev
                    </button>
                    <button id="locNext" type="button"
                        class="bg-blue-900 hover:bg-blue-700 text-white font-semibold px-4 md:px-6 py-2.5 md:py-3 rounded-xl transition-all duration-200 text-sm shadow">
                        Next &#8594;
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                <div class="grid md:grid-cols-2">
                    <div class="p-6 md:p-8 flex flex-col gap-5">
                        <div>
                            <span id="locBadge" class="inline-block text-xs font-bold text-white bg-blue-700 uppercase tracking-widest px-3 py-1 rounded-full">Main Campus</span>
                            <h3 id="locTitle" class="text-xl md:text-2xl font-bold mt-3 text-blue-900">123 Grace Avenue</h3>
                            <p id="locAddress" class="mt-1 text-slate-500 text-sm">City Center, Abuja, Nigeria.</p>
                        </div>
                        <p id="locDesc" class="text-slate-600 leading-7 text-sm">Our main campus is home to our Sunday services, midweek Bible study, and Friday prayer meetings. All are welcome.</p>
                        <div class="space-y-2 text-sm border-t border-slate-100 pt-4">
                            <p class="font-semibold text-slate-700 mb-2">Service Times</p>
                            <div class="flex items-center gap-3"><span class="w-2 h-2 rounded-full bg-blue-600 flex-shrink-0"></span><span><strong>Sunday:</strong> 9:00 AM</span></div>
                            <div class="flex items-center gap-3"><span class="w-2 h-2 rounded-full bg-blue-600 flex-shrink-0"></span><span><strong>Wednesday:</strong> 6:00 PM</span></div>
                            <div class="flex items-center gap-3"><span class="w-2 h-2 rounded-full bg-blue-600 flex-shrink-0"></span><span><strong>Friday:</strong> 6:00 PM</span></div>
                        </div>
                        <div class="border-t border-slate-100 pt-4 text-sm">
                            <p class="text-slate-600"><strong>Phone:</strong> <a href="tel:+2348000000000" class="text-blue-700 hover:underline">+234 800 000 0000</a></p>
                        </div>
                        <a id="locDirections" href="https://maps.google.com/?q=9.0579,7.4914" target="_blank"
                           class="inline-flex items-center justify-center gap-2 bg-blue-900 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-xl transition text-sm w-full">
                            &#128205; Get Directions
                        </a>
                    </div>
                    <div id="locMapContainer" class="relative h-72 md:h-full min-h-72 bg-slate-100"></div>
                </div>
            </div>
        </section>

    </main>

    <!-- ===== SIDEBAR 2/5 ===== -->
    <aside class="w-full lg:w-2/5 h-full">
        <div class="space-y-6" style="height:100%;overflow:auto;padding-right:6px;">

            <!-- Upcoming Events -->
            <div class="bg-white rounded-3xl shadow p-6">
                <h3 class="text-xl font-bold text-blue-900 mb-5">Upcoming Events</h3>
                <div class="grid grid-cols-1 gap-3">
                    <div class="bg-white shadow-xl rounded-3xl overflow-hidden hover:shadow-2xl transition flex flex-col" style="min-height:0;">
                        <img src="https://images.unsplash.com/photo-1519491050282-cf00c82424b4?w=800" alt="Youth Conference" style="width:100%;flex:0 0 40%;object-fit:cover;">
                        <div style="flex:1 1 60%;padding:1rem;display:flex;flex-direction:column;justify-content:space-between;min-height:0;">
                            <div>
                                <time class="text-xs text-blue-700 font-semibold">AUG 15</time>
                                <h4 class="font-semibold text-sm mt-1 group-hover:text-blue-700 leading-snug">Youth Conference</h4>
                            </div>
                            <a href="/details/1" class="inline-block mt-3 text-xs text-blue-700 font-medium">Details &rarr;</a>
                        </div>
                    </div>
                    <div class="bg-white shadow-xl rounded-3xl overflow-hidden hover:shadow-2xl transition flex flex-col" style="min-height:0;">
                        <img src="https://images.unsplash.com/photo-1504052434569-70ad5836ab65?w=800" alt="Revival Night" style="width:100%;flex:0 0 40%;object-fit:cover;">
                        <div style="flex:1 1 60%;padding:1rem;display:flex;flex-direction:column;justify-content:space-between;min-height:0;">
                            <div>
                                <time class="text-xs text-blue-700 font-semibold">SEP 10</time>
                                <h4 class="font-semibold text-sm mt-1 group-hover:text-blue-700 leading-snug">Revival Night</h4>
                            </div>
                            <a href="/details/2" class="inline-block mt-3 text-xs text-blue-700 font-medium">Details &rarr;</a>
                        </div>
                    </div>
                    <div class="bg-white shadow-xl rounded-3xl overflow-hidden hover:shadow-2xl transition flex flex-col" style="min-height:0;">
                        <img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?w=800" alt="Community Outreach" style="width:100%;flex:0 0 40%;object-fit:cover;">
                        <div style="flex:1 1 60%;padding:1rem;display:flex;flex-direction:column;justify-content:space-between;min-height:0;">
                            <div>
                                <time class="text-xs text-blue-700 font-semibold">OCT 05</time>
                                <h4 class="font-semibold text-sm mt-1 group-hover:text-blue-700 leading-snug">Community Outreach</h4>
                            </div>
                            <a href="/details/3" class="inline-block mt-3 text-xs text-blue-700 font-medium">Details &rarr;</a>
                        </div>
                    </div>
                    <div class="bg-white shadow-xl rounded-3xl overflow-hidden hover:shadow-2xl transition flex flex-col" style="min-height:0;">
                        <img src="https://images.unsplash.com/photo-1533777324565-a040eb52fac2?w=800" alt="Women's Retreat" style="width:100%;flex:0 0 40%;object-fit:cover;">
                        <div style="flex:1 1 60%;padding:1rem;display:flex;flex-direction:column;justify-content:space-between;min-height:0;">
                            <div>
                                <time class="text-xs text-blue-700 font-semibold">NOV 02</time>
                                <h4 class="font-semibold text-sm mt-1 group-hover:text-blue-700 leading-snug">Women's Retreat</h4>
                            </div>
                            <a href="/details/4" class="inline-block mt-3 text-xs text-blue-700 font-medium">Details &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="mt-4 text-right">
                    <a href="/events" class="text-sm text-blue-700 font-medium hover:underline">See all events &rarr;</a>
                </div>
            </div>


        </div>
    </aside>

</div>

<!-- ===== SCRIPTS ===== -->
<script>
// ---- Mobile Menu Toggle ----
const menuToggle  = document.getElementById('menuToggle');
const mobileMenu  = document.getElementById('mobileMenu');
const bar1 = document.getElementById('bar1');
const bar2 = document.getElementById('bar2');
const bar3 = document.getElementById('bar3');

menuToggle.addEventListener('click', function () {
    const isOpen = !mobileMenu.classList.contains('hidden');
    if (isOpen) {
        mobileMenu.classList.add('hidden');
        menuToggle.setAttribute('aria-expanded', 'false');
        bar1.style.transform = '';
        bar2.style.opacity   = '';
        bar3.style.transform = '';
    } else {
        mobileMenu.classList.remove('hidden');
        menuToggle.setAttribute('aria-expanded', 'true');
        bar1.style.transform = 'translateY(6px) rotate(45deg)';
        bar2.style.opacity   = '0';
        bar3.style.transform = 'translateY(-6px) rotate(-45deg)';
    }
});

function closeMobileMenu() {
    mobileMenu.classList.add('hidden');
    menuToggle.setAttribute('aria-expanded', 'false');
    bar1.style.transform = '';
    bar2.style.opacity   = '';
    bar3.style.transform = '';
}

document.addEventListener('click', function (e) {
    if (!menuToggle.contains(e.target) && !mobileMenu.contains(e.target)) {
        closeMobileMenu();
    }
});

// ---- Location Carousel ----
const locations = [
    {
        badge: 'Headquarters',
        title: '123 Grace Avenue',
        address: 'City Center, Abuja, Nigeria.',
        desc: 'Our main campus is home to our Sunday services, midweek Bible study, and Friday prayer meetings. All are welcome.',
        mapSrc: 'https://maps.google.com/maps?q=9.0579,7.4914&z=15&output=embed',
        directions: 'https://maps.google.com/?q=9.0579,7.4914'
    },
    {
        badge: 'Zone 1',
        title: 'Eastside Fellowship Hall',
        address: 'East District, Abuja, Nigeria.',
        desc: 'Our Eastside campus serves the eastern communities with Sunday worship and a midweek youth programme for teens and young adults.',
        mapSrc: 'https://maps.google.com/maps?q=9.0679,7.5514&z=15&output=embed',
        directions: 'https://maps.google.com/?q=9.0679,7.5514'
    },
    {
        badge: 'Zone 2',
        title: 'North Fellowship Centre',
        address: 'North Park, Abuja, Nigeria.',
        desc: "The North campus hosts a thriving children's ministry, couples fellowship, and our flagship Friday night prayer service.",
        mapSrc: 'https://maps.google.com/maps?q=9.1079,7.4714&z=15&output=embed',
        directions: 'https://maps.google.com/?q=9.1079,7.4714'
    },
    {
        badge: 'Zone 3',
        title: 'Riverside Worship Centre',
        address: 'Riverside, Abuja, Nigeria.',
        desc: 'Our newest campus serves the southern riverside communities with Sunday worship, outreach ministries, and community dinners.',
        mapSrc: 'https://maps.google.com/maps?q=9.0279,7.4414&z=15&output=embed',
        directions: 'https://maps.google.com/?q=9.0279,7.4414'
    }
];

let locIndex = 0;

const elBadge      = document.getElementById('locBadge');
const elTitle      = document.getElementById('locTitle');
const elAddress    = document.getElementById('locAddress');
const elDesc       = document.getElementById('locDesc');
const elContainer  = document.getElementById('locMapContainer');
const elDirections = document.getElementById('locDirections');
const elCounter    = document.getElementById('locCounter');
const elDots       = document.getElementById('locDots');
const btnPrev      = document.getElementById('locPrev');
const btnNext      = document.getElementById('locNext');

locations.forEach(function (_, i) {
    var dot = document.createElement('button');
    dot.type = 'button';
    dot.setAttribute('data-i', i);
    dot.className = 'w-3 h-3 rounded-full transition-all ' + (i === 0 ? 'bg-blue-700 scale-110' : 'bg-slate-300');
    dot.addEventListener('click', function () {
        locIndex = parseInt(this.getAttribute('data-i'));
        renderLoc();
    });
    elDots.appendChild(dot);
});

function renderLoc() {
    var loc = locations[locIndex];
    elBadge.textContent   = loc.badge;
    elTitle.textContent   = loc.title;
    elAddress.textContent = loc.address;
    elDesc.textContent    = loc.desc;
    elDirections.href     = loc.directions;
    elCounter.textContent = (locIndex + 1) + ' / ' + locations.length;

    elContainer.innerHTML = '';
    var iframe = document.createElement('iframe');
    iframe.setAttribute('src', loc.mapSrc);
    iframe.setAttribute('frameborder', '0');
    iframe.setAttribute('allowfullscreen', '');
    iframe.setAttribute('loading', 'lazy');
    iframe.setAttribute('referrerpolicy', 'no-referrer-when-downgrade');
    iframe.style.cssText = 'position:absolute;inset:0;width:100%;height:100%;border:0;';
    elContainer.appendChild(iframe);

    Array.from(elDots.children).forEach(function (dot, i) {
        dot.className = 'w-3 h-3 rounded-full transition-all ' + (i === locIndex ? 'bg-blue-700 scale-110' : 'bg-slate-300');
    });
}

btnPrev.addEventListener('click', function () {
    locIndex = (locIndex - 1 + locations.length) % locations.length;
    renderLoc();
});
btnNext.addEventListener('click', function () {
    locIndex = (locIndex + 1) % locations.length;
    renderLoc();
});
document.addEventListener('keydown', function (e) {
    if (e.key === 'ArrowLeft')  { locIndex = (locIndex - 1 + locations.length) % locations.length; renderLoc(); }
    if (e.key === 'ArrowRight') { locIndex = (locIndex + 1) % locations.length; renderLoc(); }
});

renderLoc();
</script>

</body>
</html>