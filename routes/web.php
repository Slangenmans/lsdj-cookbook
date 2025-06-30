<?php

use Illuminate\Support\Facades\Route;
use \App\Models\PulseInstrument;
use Inertia\Inertia;

Route::get('/', function () {
        return Inertia::render('welcome', []);
})->name('home');

Route::get('/pulse', function () {
    return Inertia::render('instrumentList');
})->name('pulse');

Route::get('/editor', function () {
    return Inertia::render('editor', [
        'instrument' => PulseInstrument::all()->shuffle()->first(),
    ]);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
