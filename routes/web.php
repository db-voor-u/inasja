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
    return Inertia('Home');
})->name('home');

Route::get('/wiebenik', function () {
    return Inertia('WieBenIk');
})->name('wiebenik');

Route::get('/coaching', function () {
    return Inertia('Coaching');
})->name('coaching');

Route::get('/aanbod', function () {
    return Inertia('Aanbod');
})->name('aanbod');

Route::get('/podcast', function () {
    sleep(4);
    return Inertia('Podcast');
})->name('podcast');

Route::get('/werkzaamheden', function () {
    return Inertia('WerkZaamHeden');
})->name('werkzaamheden');

Route::get('/contact', function () {
    return Inertia('Contact');
})->name('contact');

Route::post('/send-email', [EmailController::class, 'send']);
