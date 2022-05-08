<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Web/Index', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->name('home');

Route::get('about', function(){
    return Inertia::render('Web/About', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->name('about');

Route::inertia('contact-us', 'Web/Contact')->name('contact');
Route::inertia('how-it-works', 'Web/Works')->name('works');
Route::inertia('writer', 'Web/Writers')->name('writers');
Route::inertia('terms-and-condition', 'Web/Terms')->name('terms');
Route::inertia('privacy-policy', 'Web/Policy')->name('policy');
Route::inertia('faq', 'Web/Faq')->name('faq');
Route::inertia('acceptance-use-policy', 'Web/UsePolicy')->name('usePolicy');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
