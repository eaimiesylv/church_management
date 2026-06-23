<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

// Pages: Events, Branches, Contact
Route::view('/events', 'pages.events')->name('events');
Route::get('/locations', [App\Http\Controllers\LocationController::class, 'index'])->name('locations');
Route::get('/contact', fn() => view('pages.contact'))->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.submit');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
