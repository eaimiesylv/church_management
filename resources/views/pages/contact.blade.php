<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us - {{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>html,body{margin:0;padding:0}</style>
    </head>
    <body class="bg-white text-slate-800 antialiased">
        @include('partials.header')

        <main style="padding-top:85px;max-width:800px;margin:0 auto;padding:3rem 1rem;">
            <h1 class="text-3xl font-bold mb-3">Contact Us</h1>
            <p class="text-slate-600 mb-6">Send us a message and we'll get back to you as soon as possible.</p>

            @if(session('contact_success'))
                <div class="bg-green-50 border border-green-200 text-green-800 p-4 rounded mb-4">{{ session('contact_success') }}</div>
            @endif

            <form method="POST" action="{{ route('contact.submit') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium mb-1">Your Name</label>
                    <input name="name" required class="w-full border rounded p-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input name="email" type="email" required class="w-full border rounded p-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Message</label>
                    <textarea name="message" rows="6" required class="w-full border rounded p-2"></textarea>
                </div>
                <div>
                    <button type="submit" class="bg-blue-900 text-white px-5 py-2 rounded">Send Message</button>
                </div>
            </form>
        </main>

        <footer class="text-center text-sm text-slate-500 py-12 mt-6">&copy; {{ date('Y') }} {{ config('app.name') }}</footer>
    </body>
</html>
