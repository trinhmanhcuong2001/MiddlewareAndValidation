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
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/login-user', function () {
    session()->put('name', 'John');
    session()->put('role', 'user');

    return redirect()->route('home');
})->name('login.user');

Route::get('/login-admin', function () {
    session()->put('name', 'David');
    session()->put('role', 'admin');
    return redirect()->route('home');
})->name('login.admin');

Route::get('/admin', function () {
    return view('admin');
})->name('admin')->middleware('checkAdmin');

Route::get('/logout', function () {
    session()->flush();
    return redirect()->route('home');
})->name('logout');
