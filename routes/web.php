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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('/deploy')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/basic', function () {
        return view('deploy.basic');
    })->middleware(['auth', 'verified'])->name('deploy.basic');
});

require __DIR__.'/auth.php';
