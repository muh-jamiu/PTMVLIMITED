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

Route::get('/', function () {
    return view("index");
});

Route::get('/about-us', function () {
    return view("index");
});

Route::get('/contact-us', function () {
    return view("index");
});

Route::get('/blogs', function () {
    return view("index");
});

Route::get('/feature-works', function () {
    return view("index");
});

Route::get('/team', function () {
    return view("index");
});

Route::get('/services', function () {
    return view("index");
});
