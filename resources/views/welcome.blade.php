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
    </head>
    <body class="bg-white text-slate-800 antialiased">

<!-- Navigation -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur border-b border-slate-200">
    <div class="w-[80%] mx-auto px-2.5 py-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            @if (file_exists(public_path('logo.jpg')))
            
                <a href="{{ url('/') }}" class="block"><img src="{{ asset('logo.jpg') }}" alt="{{ config('app.name') }} logo" class="h-10 w-auto"></a>
            @endif
            <a href="{{ url('/') }}" class="font-bold text-2xl text-blue-900">{{ config('app.name', 'GOSPEL LIBERATION') }}</a>
        </div>
        <div class="hidden md:flex gap-8">
            <a href="#about" class="hover:text-blue-700">About</a>
            <a href="#testimonies" class="hover:text-blue-700">Testimonies</a>
            <a href="#events" class="hover:text-blue-700">Events</a>
            <a href="#gallery" class="hover:text-blue-700">Gallery</a>
            <a href="#daily-devotion" class="hover:text-blue-700">Daily Devotion</a>
            <a href="#contact" class="hover:text-blue-700">Contact Us</a>
            <a href="#location" class="hover:text-blue-700">Location</a>
        </div>
        <div class="flex gap-3">
            <a href="{{ route('login') }}" class="px-5 py-2 border rounded-lg">Login</a>
            <a href="{{ route('register') }}" class="px-5 py-2 bg-blue-900 text-white rounded-lg">Join Us</a>
        </div>
    </div>
</nav>

<!-- Hero -->
<!-- Hero -->
<section class="relative min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1438232992991-995b7058bbb3?q=80&w=2000');">
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative z-10 text-center px-2.5 w-[80%] mx-auto">
        <span class="bg-white/20 px-4 py-2 rounded-full text-white">Welcome To {{ config('app.name', 'GOSPEL LIBERATION') }}</span>
        <h1 class="text-5xl md:text-7xl font-bold text-white mt-8">Connecting People To Christ</h1>
        <p class="text-xl text-slate-200 mt-6">Building lives, restoring hope, and transforming communities through the Gospel of Jesus Christ.</p>
        <div class="mt-10 flex justify-center gap-4">
            <a href="#about" class="bg-blue-600 text-white px-8 py-4 rounded-xl font-semibold transition transform hover:-translate-y-1">Learn More</a>
            <a href="#events" class="bg-white text-slate-900 px-8 py-4 rounded-xl font-semibold transition transform hover:-translate-y-1">Upcoming Events</a>
        </div>
    </div>
</section>

<!-- Main layout: 3/5 content + 2/5 sidebar -->
<div class="w-[80%] mx-auto px-2.5 py-16 flex flex-col lg:flex-row">

    <!-- ===== MAIN CONTENT 3/5 ===== -->
    <main class="w-full lg:w-3/5 space-y-24">

        <!-- About -->
        <section id="about" class="py-4">
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold">Who We Are</h2>
                <p class="mt-4 text-slate-600 max-w-3xl mx-auto">We are a Christ-centered church committed to worship, discipleship, evangelism and community impact.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white shadow-xl rounded-3xl p-10 transition hover:shadow-2xl">
                    <h3 class="text-3xl font-bold mb-6 text-blue-900">Our Mission</h3>
                    <p class="leading-8 text-slate-600">To lead people into a growing relationship with Jesus Christ through worship, discipleship, fellowship and service.</p>
                </div>
                <div class="bg-white shadow-xl rounded-3xl p-10 transition hover:shadow-2xl">
                    <h3 class="text-3xl font-bold mb-6 text-blue-900">Our Vision</h3>
                    <p class="leading-8 text-slate-600">To raise believers who impact families, communities and nations through the power and love of Christ.</p>
                </div>
            </div>
        </section>

        <!-- Service Times -->
        <section class="bg-slate-50 py-8 rounded-3xl p-8">
            <div class="text-center mb-6">
                <h2 class="text-4xl font-bold">Service Schedule</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-2xl shadow transition transform hover:scale-105">
                    <h3 class="font-bold text-2xl">Sunday Worship</h3>
                    <p class="mt-3 text-slate-600">9:00 AM</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow transition transform hover:scale-105">
                    <h3 class="font-bold text-2xl">Bible Study</h3>
                    <p class="mt-3 text-slate-600">Wednesday 6:00 PM</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow transition transform hover:scale-105">
                    <h3 class="font-bold text-2xl">Prayer Meeting</h3>
                    <p class="mt-3 text-slate-600">Friday 6:00 PM</p>
                </div>
            </div>
        </section>

        <!-- Events removed from main layout (moved to sidebar) -->

        <!-- Testimonies -->
        <section id="testimonies" class="py-4">
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold">Testimonies</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <a href="/testimonies/1" class="block bg-white rounded-3xl shadow overflow-hidden hover:shadow-2xl transition">
                    <img src="https://images.unsplash.com/photo-1533777324565-a040eb52fac2?w=1200" class="w-full h-44 object-cover" alt="Saved and Restored">
                    <div class="p-6">
                        <h3 class="text-xl font-bold">Saved and Restored</h3>
                        <p class="mt-2 text-slate-600">A short account of God's healing and restoration.</p>
                    </div>
                </a>
                <a href="/testimonies/2" class="block bg-white rounded-3xl shadow overflow-hidden hover:shadow-2xl transition">
                    <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=1200" class="w-full h-44 object-cover" alt="From Despair to Hope">
                    <div class="p-6">
                        <h3 class="text-xl font-bold">From Despair to Hope</h3>
                        <p class="mt-2 text-slate-600">How faith renewed a family's future.</p>
                    </div>
                </a>
                <a href="/testimonies/3" class="block bg-white rounded-3xl shadow overflow-hidden hover:shadow-2xl transition">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=1200" class="w-full h-44 object-cover" alt="A New Beginning">
                    <div class="p-6">
                        <h3 class="text-xl font-bold">A New Beginning</h3>
                        <p class="mt-2 text-slate-600">A testimony of freedom and purpose.</p>
                    </div>
                </a>
            </div>
        </section>

        <!-- Gallery -->
        <section id="gallery" class="py-4 bg-slate-50 rounded-3xl p-8">
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold">Church Gallery</h2>
                <p class="mt-3 text-slate-600 max-w-2xl mx-auto">Moments from our services, outreach and events.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <a href="/gallery/1" class="block overflow-hidden rounded-3xl shadow bg-white hover:shadow-2xl transition">
                    <img src="https://images.unsplash.com/photo-1519491050282-cf00c82424b4?w=800" class="w-full h-64 object-cover" alt="Worship Night">
                    <div class="p-4">
                        <h3 class="font-bold">Worship Night</h3>
                        <p class="text-slate-600 text-sm">Powerful worship moments.</p>
                    </div>
                </a>
                <a href="/gallery/2" class="block overflow-hidden rounded-3xl shadow bg-white hover:shadow-2xl transition">
                    <img src="https://images.unsplash.com/photo-1504052434569-70ad5836ab65?w=800" class="w-full h-64 object-cover" alt="Community Outreach">
                    <div class="p-4">
                        <h3 class="font-bold">Community Outreach</h3>
                        <p class="text-slate-600 text-sm">Serving our neighbours.</p>
                    </div>
                </a>
                <a href="/gallery/3" class="block overflow-hidden rounded-3xl shadow bg-white hover:shadow-2xl transition">
                    <img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?w=800" class="w-full h-64 object-cover" alt="Youth Camp">
                    <div class="p-4">
                        <h3 class="font-bold">Youth Camp</h3>
                        <p class="text-slate-600 text-sm">Fun and fellowship.</p>
                    </div>
                </a>
            </div>
        </section>

        <!-- Daily Devotion -->
        <section id="daily-devotion" class="py-4">
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold">Daily Devotion</h2>
                <p class="mt-3 text-slate-600 max-w-2xl mx-auto">Short reflections to encourage your walk with Christ.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <a href="/devotions/1" class="block bg-white rounded-3xl shadow p-6 hover:shadow-2xl transition">
                    <h3 class="text-xl font-bold">Hope in Trials</h3>
                    <p class="mt-2 text-slate-600">A short devotional on trusting God in difficulty.</p>
                </a>
                <a href="/devotions/2" class="block bg-white rounded-3xl shadow p-6 hover:shadow-2xl transition">
                    <h3 class="text-xl font-bold">Walking in Love</h3>
                    <p class="mt-2 text-slate-600">Reflections on loving our neighbour.</p>
                </a>
                <a href="/devotions/3" class="block bg-white rounded-3xl shadow p-6 hover:shadow-2xl transition">
                    <h3 class="text-xl font-bold">Prayer & Persistence</h3>
                    <p class="mt-2 text-slate-600">Encouragement to build a strong prayer life.</p>
                </a>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="py-4">
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold">Contact Us</h2>
                <p class="mt-3 text-slate-600">Have a question or need prayer? Reach out to us.</p>
            </div>
            <div class="bg-white rounded-3xl shadow p-6 max-w-3xl mx-auto">
                <form action="/contact" method="POST" class="grid grid-cols-1 gap-4">
                    @csrf
                    <input name="name" placeholder="Your name" class="border rounded p-3">
                    <input name="email" placeholder="Email" class="border rounded p-3">
                    <textarea name="message" placeholder="Message" class="border rounded p-3 h-32"></textarea>
                    <button class="bg-blue-900 text-white px-6 py-3 rounded">Send Message</button>
                </form>
            </div>
        </section>

        <!-- Location — 2 column: description left, map right with carousel -->
        <section id="location" class="py-4">
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold">Visit Us</h2>
                <p class="mt-3 text-slate-600">Find a campus near you.</p>
            </div>

            <div class="bg-white rounded-3xl shadow overflow-hidden">
                <div class="grid md:grid-cols-2">

                    <!-- Left: Location description -->
                    <div class="p-8 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-semibold text-blue-700 uppercase tracking-widest" id="locBadge">Main Campus</span>
                            <h3 id="locTitle" class="text-2xl font-bold mt-2 text-blue-900">123 Grace Avenue</h3>
                            <p id="locAddress" class="mt-2 text-slate-500 text-sm">City Center, Abuja, Nigeria.</p>
                            <p id="locDesc" class="mt-4 text-slate-600 leading-7">Our main campus is home to our Sunday services, midweek Bible study, and Friday prayer meetings. All are welcome — come as you are.</p>

                            <div class="mt-6 space-y-2 text-sm">
                                <div class="flex items-center gap-3">
                                    <span class="w-2 h-2 rounded-full bg-blue-600 inline-block"></span>
                                    <span><strong>Sunday:</strong> 9:00 AM</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="w-2 h-2 rounded-full bg-blue-600 inline-block"></span>
                                    <span><strong>Wednesday:</strong> 6:00 PM</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="w-2 h-2 rounded-full bg-blue-600 inline-block"></span>
                                    <span><strong>Friday:</strong> 6:00 PM</span>
                                </div>
                            </div>

                            <a id="locDirections" href="#" target="_blank"
                               class="inline-block mt-6 bg-blue-900 text-white text-sm px-5 py-2.5 rounded-lg hover:bg-blue-800 transition">
                                Get Directions →
                            </a>

                            <p class="mt-3 text-sm"><strong>Phone:</strong> <a href="tel:+2348000000000" class="text-blue-700">+234 800 000 0000</a></p>
                        </div>

                        <!-- Carousel controls + indicators -->
                        <div class="mt-8 flex items-center gap-4">
                            <button id="locPrev" class="w-9 h-9 flex items-center justify-center rounded-full bg-slate-100 hover:bg-blue-100 hover:text-blue-700 transition font-bold">‹</button>
                            <div id="locDots" class="flex gap-2"></div>
                            <button id="locNext" class="w-9 h-9 flex items-center justify-center rounded-full bg-slate-100 hover:bg-blue-100 hover:text-blue-700 transition font-bold">›</button>
                            <span id="locCounter" class="text-xs text-slate-400 ml-auto">1 / 4</span>
                        </div>
                    </div>

                    <!-- Right: Embedded Google Map -->
                    <div id="locMapContainer" class="relative h-80 md:h-auto min-h-64 bg-slate-100">
                        <!-- iframe injected by JS -->
                    </div>

                </div>
            </div>
        </section>

        <footer class="text-center text-sm text-slate-500 py-12">&copy; {{ date('Y') }} {{ config('app.name', 'GOSPEL LIBERATION') }}</footer>
    </main>

    <!-- ===== SIDEBAR 2/5 ===== -->
    <aside class="w-full lg:w-2/5">
        <div class="sticky top-24 space-y-6">

            <!-- Latest News -->
            <div class="bg-white rounded-3xl shadow p-6">
                <h3 class="text-xl font-bold text-blue-900 mb-5">Latest News</h3>
                <!-- 2-column grid layout for news -->
                <div class="grid grid-cols-2 gap-4">
                    <a href="/details/101" class="block bg-slate-50 rounded-2xl p-4 hover:shadow-md transition group">
                        <time class="text-xs text-blue-700 font-semibold">Jun 10</time>
                        <h4 class="font-semibold text-sm mt-1 group-hover:text-blue-700 leading-snug">New Community Centre Launch</h4>
                        <p class="text-xs text-slate-500 mt-1">Opening our doors to the neighbourhood.</p>
                        <span class="inline-block mt-2 text-xs text-blue-700 font-medium">Read →</span>
                    </a>
                    <a href="/details/102" class="block bg-slate-50 rounded-2xl p-4 hover:shadow-md transition group">
                        <time class="text-xs text-blue-700 font-semibold">May 22</time>
                        <h4 class="font-semibold text-sm mt-1 group-hover:text-blue-700 leading-snug">Volunteer Appreciation Sunday</h4>
                        <p class="text-xs text-slate-500 mt-1">Celebrating those who serve faithfully.</p>
                        <span class="inline-block mt-2 text-xs text-blue-700 font-medium">Read →</span>
                    </a>
                    <a href="/details/103" class="block bg-slate-50 rounded-2xl p-4 hover:shadow-md transition group">
                        <time class="text-xs text-blue-700 font-semibold">Apr 18</time>
                        <h4 class="font-semibold text-sm mt-1 group-hover:text-blue-700 leading-snug">New Bible Study Group</h4>
                        <p class="text-xs text-slate-500 mt-1">Starting Thursdays at 7 PM — all welcome.</p>
                        <span class="inline-block mt-2 text-xs text-blue-700 font-medium">Read →</span>
                    </a>
                    <a href="/details/104" class="block bg-slate-50 rounded-2xl p-4 hover:shadow-md transition group">
                        <time class="text-xs text-blue-700 font-semibold">Mar 30</time>
                        <h4 class="font-semibold text-sm mt-1 group-hover:text-blue-700 leading-snug">Children's Ministry Grows</h4>
                        <p class="text-xs text-slate-500 mt-1">New classes for ages 5–12 now running.</p>
                        <span class="inline-block mt-2 text-xs text-blue-700 font-medium">Read →</span>
                    </a>
                </div>
            </div>

            <!-- Upcoming Events in Sidebar -->
            <div class="bg-white rounded-3xl shadow p-6">
                <h3 class="text-xl font-bold text-blue-900 mb-5">Upcoming Events</h3>
                <!-- 2-column grid layout for events -->
                <div class="grid grid-cols-2 gap-4">
                    <a href="/details/1" class="block bg-slate-50 rounded-2xl overflow-hidden hover:shadow-md transition group">
                        <img src="https://images.unsplash.com/photo-1519491050282-cf00c82424b4?w=800" class="w-full h-36 object-cover" alt="Youth Conference">
                        <div class="p-3">
                            <time class="text-xs text-blue-700 font-semibold">AUG 15</time>
                            <h4 class="font-semibold text-sm mt-0.5 group-hover:text-blue-700 leading-snug">Youth Conference</h4>
                            <span class="inline-block mt-1 text-xs text-blue-700 font-medium">Details →</span>
                        </div>
                    </a>
                    <a href="/details/2" class="block bg-slate-50 rounded-2xl overflow-hidden hover:shadow-md transition group">
                        <img src="https://images.unsplash.com/photo-1504052434569-70ad5836ab65?w=800" class="w-full h-36 object-cover" alt="Revival Night">
                        <div class="p-3">
                            <time class="text-xs text-blue-700 font-semibold">SEP 10</time>
                            <h4 class="font-semibold text-sm mt-0.5 group-hover:text-blue-700 leading-snug">Revival Night</h4>
                            <span class="inline-block mt-1 text-xs text-blue-700 font-medium">Details →</span>
                        </div>
                    </a>
                    <a href="/details/3" class="block bg-slate-50 rounded-2xl overflow-hidden hover:shadow-md transition group">
                        <img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?w=800" class="w-full h-36 object-cover" alt="Community Outreach">
                        <div class="p-3">
                            <time class="text-xs text-blue-700 font-semibold">OCT 05</time>
                            <h4 class="font-semibold text-sm mt-0.5 group-hover:text-blue-700 leading-snug">Community Outreach</h4>
                            <span class="inline-block mt-1 text-xs text-blue-700 font-medium">Details →</span>
                        </div>
                    </a>
                    <a href="/details/4" class="block bg-slate-50 rounded-2xl overflow-hidden hover:shadow-md transition group">
                        <img src="https://images.unsplash.com/photo-1533777324565-a040eb52fac2?w=800" class="w-full h-36 object-cover" alt="Women's Retreat">
                        <div class="p-3">
                            <time class="text-xs text-blue-700 font-semibold">NOV 02</time>
                            <h4 class="font-semibold text-sm mt-0.5 group-hover:text-blue-700 leading-snug">Women's Retreat</h4>
                            <span class="inline-block mt-1 text-xs text-blue-700 font-medium">Details →</span>
                        </div>
                    </a>
                </div>
                <div class="mt-4 text-right">
                    <a href="/events" class="text-sm text-blue-700 font-medium hover:underline">See all events →</a>
                </div>
            </div>

            <!-- Subscribe -->
            <div class="bg-blue-900 rounded-3xl p-6 text-white">
                <h4 class="font-bold text-lg">Stay Updated</h4>
                <p class="text-sm text-blue-200 mt-2">Subscribe for news and devotional updates.</p>
                <form action="/subscribe" method="POST" class="mt-4 flex gap-2">
                    @csrf
                    <input name="email" placeholder="Your email" class="flex-1 rounded-lg px-3 py-2 text-slate-800 text-sm bg-white border-0 outline-none">
                    <button class="bg-white text-blue-900 font-semibold px-4 py-2 rounded-lg text-sm hover:bg-blue-50 transition">Subscribe</button>
                </form>
            </div>

        </div>
    </aside>

</div><!-- end flex layout -->

<script>
    const locations = [
        {
            badge: 'Main Campus',
            title: '123 Grace Avenue',
            address: 'City Center, Abuja, Nigeria.',
            desc: 'Our main campus is home to our Sunday services, midweek Bible study, and Friday prayer meetings. All are welcome — come as you are.',
            mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.094!2d7.4914!3d9.0579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOcKwMDMnMjguNCJOIDfCsDI5JzI5LjAiRQ!5e0!3m2!1sen!2sng!4v1',
            directions: 'https://maps.google.com/?q=9.0579,7.4914'
        },
        {
            badge: 'Eastside Campus',
            title: 'Eastside Fellowship Hall',
            address: 'East District, Abuja, Nigeria.',
            desc: 'Our Eastside campus serves the eastern communities with Sunday worship and a midweek youth programme for teens and young adults.',
            mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.094!2d7.5514!3d9.0679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOcKwMDQnMDQuNCJOIDfCsDMzJzA1LjAiRQ!5e0!3m2!1sen!2sng!4v1',
            directions: 'https://maps.google.com/?q=9.0679,7.5514'
        },
        {
            badge: 'North Campus',
            title: 'North Fellowship Centre',
            address: 'North Park, Abuja, Nigeria.',
            desc: 'The North campus hosts a thriving children's ministry, couples fellowship, and our flagship Friday night prayer service.',
            mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.094!2d7.4714!3d9.1079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOcKwMDYnMjguNCJOIDfCsDI4JzE3LjAiRQ!5e0!3m2!1sen!2sng!4v1',
            directions: 'https://maps.google.com/?q=9.1079,7.4714'
        },
        {
            badge: 'Riverside Venue',
            title: 'Riverside Worship Centre',
            address: 'Riverside, Abuja, Nigeria.',
            desc: 'Our newest campus, Riverside serves the southern riverside communities with Sunday worship, outreach ministries, and community dinners.',
            mapSrc: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.094!2d7.4414!3d9.0279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOcKwMDEnNDAuNCJOIDfCsDI2JzI5LjAiRQ!5e0!3m2!1sen!2sng!4v1',
            directions: 'https://maps.google.com/?q=9.0279,7.4414'
        }
    ];

    let locIndex = 0;

    const locBadge      = document.getElementById('locBadge');
    const locTitle      = document.getElementById('locTitle');
    const locAddress    = document.getElementById('locAddress');
    const locDesc       = document.getElementById('locDesc');
    const locMapContainer = document.getElementById('locMapContainer');
    const locDirections = document.getElementById('locDirections');
    const locCounter    = document.getElementById('locCounter');
    const locDots       = document.getElementById('locDots');

    // ensure iframe exists inside locMapContainer
    let locMap = document.getElementById('locMap');
    if (!locMap) {
        locMap = document.createElement('iframe');
        locMap.id = 'locMap';
        locMap.className = 'absolute inset-0 w-full h-full border-0';
        locMap.loading = 'lazy';
        locMap.referrerPolicy = 'no-referrer-when-downgrade';
        locMapContainer.appendChild(locMap);
    }

    // Build dots
    locations.forEach((_, i) => {
        const dot = document.createElement('button');
        dot.className = 'w-2 h-2 rounded-full transition ' + (i === 0 ? 'bg-blue-700' : 'bg-slate-300');
        dot.addEventListener('click', () => { locIndex = i; renderLoc(); });
        locDots.appendChild(dot);
    });

    function renderLoc() {
        const loc = locations[locIndex];
        locBadge.textContent     = loc.badge;
        locTitle.textContent     = loc.title;
        locAddress.textContent   = loc.address;
        locDesc.textContent      = loc.desc;
        locMap.src                = loc.mapSrc;
        locCounter.textContent   = `${locIndex + 1} / ${locations.length}`;

        // Rebuild iframe from scratch so the browser actually loads the new map
        locMapContainer.innerHTML = '';
        const iframe = document.createElement('iframe');
        iframe.className = 'absolute inset-0 w-full h-full border-0';
        iframe.src = loc.mapSrc;
        iframe.allowFullscreen = true;
        iframe.loading = 'lazy';
        iframe.referrerPolicy = 'no-referrer-when-downgrade';
        locMapContainer.appendChild(iframe);

        // Update dots
        Array.from(locDots.children).forEach((dot, i) => {
            dot.className = 'w-2 h-2 rounded-full transition ' + (i === locIndex ? 'bg-blue-700' : 'bg-slate-300');
        });
    }

    document.getElementById('locPrev').addEventListener('click', () => {
        locIndex = (locIndex - 1 + locations.length) % locations.length;
        renderLoc();
    });
    document.getElementById('locNext').addEventListener('click', () => {
        locIndex = (locIndex + 1) % locations.length;
        renderLoc();
    });

    renderLoc();
</script>

</body>
</html>