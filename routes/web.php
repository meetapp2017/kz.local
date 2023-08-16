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

Route::view('/', 'home');
Route::view('home', 'home');
Route::view('items', 'items');
Route::view('login', 'login');
Route::view('register', 'register');
Route::view('contacts', 'contacts');
Route::view('about', 'about');
Route::get('/logout', function () {

    session()->forget('user');
    session()->flush();
    return view('home');
});
