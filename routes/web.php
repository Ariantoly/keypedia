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
    return view('home_guest');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login');

Route::get('/register', function() {
    return view('register');
});

Route::get('/category', function() {
    return view('category');
});

Route::get('/keyboard', function() {
    return view('keyboard');
});

Route::get('/updateKeyboard', function() {
    return view('update_keyboard');
});

Route::get('/addKeyboard', function() {
    return view('add_keyboard');
});

Route::get('/manageCategory', function() {
    return view('manage_category');
});