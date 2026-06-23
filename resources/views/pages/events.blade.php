<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Events - {{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>html,body{margin:0;padding:0}</style>
    </head>
    <body class="bg-white text-slate-800 antialiased">
        @include('partials.header')

        <main style="padding-top:85px;max-width:1100px;margin:0 auto;padding:3rem 1rem;">
            <h1 class="text-3xl font-bold mb-3">Events</h1>
            <p class="text-slate-600 mb-6">Upcoming and past events. Join us at any of our gatherings.</p>

            <div class="grid sm:grid-cols-2 gap-6">
                <div class="bg-white rounded-2xl shadow p-5">
                    <time class="text-xs text-blue-700 font-semibold">AUG 15</time>
                    <h3 class="font-bold text-xl mt-2">Youth Conference</h3>
                    <p class="text-sm text-slate-600 mt-2">A weekend of worship, teaching and fellowship.</p>
                </div>
                <div class="bg-white rounded-2xl shadow p-5">
                    <time class="text-xs text-blue-700 font-semibold">SEP 10</time>
                    <h3 class="font-bold text-xl mt-2">Revival Night</h3>
                    <p class="text-sm text-slate-600 mt-2">An evening of prayer and revival.</p>
                </div>
            </div>
        </main>

        <footer class="text-center text-sm text-slate-500 py-12 mt-6">&copy; {{ date('Y') }} {{ config('app.name') }}</footer>
    </body>
</html>
