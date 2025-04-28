<?php

declare(strict_types=1);

use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Homepage Route
Route::get('/', function () {
    // Get featured menu items for homepage
    $featuredItems = \App\Models\MenuItem::where('is_featured', true)
        ->orderBy('sort_order')
        ->take(4)
        ->get();

    return view('home', compact('featuredItems'));
})->name('home');

// Menu Routes
Route::controller(MenuController::class)->group(function () {
    Route::get('/menu', 'index')->name('menu.index');
    Route::get('/menu/category/{category:id}', 'category')->name('menu.category');
    Route::get('/menu/{menuItem:id}', 'show')->name('menu.show');
});

// Reservation Routes
Route::controller(ReservationController::class)->group(function () {
    Route::get('/reservations', 'create')->name('reservations.create');
    Route::post('/reservations', 'store')->name('reservations.store');
    Route::get('/reservations/thank-you', 'thankYou')->name('reservations.thank-you');
});

// About Route
Route::view('/about', 'about')->name('about');

// Contact Routes
Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact.index');
    Route::post('/contact', 'store')->name('contact.store');
});
