<?php

use App\Livewire\AboutUs;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Models\store;
use App\Livewire\Features;
use App\Livewire\Location;
use App\Livewire\Services;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $store = store::where('name', 'Eurowash')->firstOrFail();
    return view('eurowash', compact('store'));
})->name('home');

Route::get('/features', Features::class)
    ->name('features');

Route::get('/services', Services::class)
    ->name('services');

Route::get('/location', Location::class)
    ->name('location');

Route::get('/about', AboutUs::class)
    ->name('about');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
