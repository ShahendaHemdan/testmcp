<?php

declare(strict_types=1);

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Homepage Route
Route::get('/', function () {
    // TODO: Fetch necessary data for the homepage (e.g., services, portfolio items)
    // $services = \App\Models\Service::orderBy('sort_order')->get();
    return view('home'); // Use the new home view
})->name('home');

// Contact Form Submission Route
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Placeholder routes for other potential pages (adjust based on Figma)

Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/portfolio', 'portfolio')->name('portfolio');


// Remove or modify the default welcome route if not needed
// Route::get('/welcome', function () {
//     return view('welcome');
// });