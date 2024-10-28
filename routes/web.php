<?php

use App\Http\Requests\CreateTaskFormRequest;
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
    return view('result');
})->name('home');

Route::get('/create-task', function () {
    return view('create_task');
})->name('task.create');

Route::post('/create-task', function (CreateTaskFormRequest $request) {
    session()->flash('success', 'Thêm thành công!');
    return redirect()->route('home');
})->name('task.store');
