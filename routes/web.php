<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/wiebenik', function () {
    return Inertia::render('WieBenIk');
})->name('wiebenik');

Route::get('/coaching', function () {
    return Inertia::render('Coaching');
})->name('coaching');

Route::get('/aanbod', function () {
    return Inertia::render('Aanbod');
})->name('aanbod');

Route::get('/podcast', function () {
    sleep(3);
    return Inertia::render('Podcast');
})->name('podcast');

Route::get('/werkzaamheden', function () {
    return Inertia::render('WerkZaamHeden');
})->name('werkzaamheden');

Route::get('/contact', function () {
    return Inertia::render('Contact');
})->name('contact');

Route::post('/send-email', [EmailController::class, 'send']);
