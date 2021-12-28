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


Route::get('/', function () {
    return view('home');
});

Route::get('/portofolio', function () {
    return view('test');
});

Route::get('/404', function () {
    return view('404');
});


Route::get('/gallery', function () {
    return view('gallery');
});


Route::get('/3d-wireframe', function () {
    return view('3d-wireframe');
});


Route::get('/instagram-motion', function () {
    return view('instagram-motion');
});


Route::get('/instagram-stories', function () {
    return view('instagram-stories');
});


Route::get('/kinetic-typography', function () {
    return view('kinetic-typography');
});


Route::get('/lyric-motion', function () {
    return view('lyric-motion');
});


Route::get('/tiktok-motion', function () {
    return view('tiktok-motion');
});

