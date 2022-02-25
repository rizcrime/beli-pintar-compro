<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    return view('about',[
        "title" => "About"
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        "title" => "Contact"
    ]);
});

Route::get('/', function () {
    return view('index',[
        "title" => "Home"
    ]);
});

Route::get('/portfolio-single', function () {
    return view('portfolio-single',[
        "title" => "Portfolio Single"
    ]);
});

Route::get('/portfolio', function () {
    return view('portfolio',[
        "title" => "Potfolio"
    ]);
});

Route::get('/services', function () {
    return view('services', [
        "title" => "Services"
    ]);
});
