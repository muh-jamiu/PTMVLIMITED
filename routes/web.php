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
    return view("pages.about");
});

Route::get('/contact-us', function () {
    return view("pages.contact");
});

Route::get('/blogs', function () {
    return view("pages.blogs");
});

Route::get('/feature-works', function () {
    return view("pages.work");
});

Route::get('/team', function () {
    return view("pages.team");
});

Route::get('/services', function () {
    return view("pages.service");
});
