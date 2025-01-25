<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
})->name('portfolio-details');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/princing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/starter-page', function () {
    return view('starter-page');
})->name('starter-page');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/testimonials', function () {
    return view('testimonials');
})->name('testimonials');

