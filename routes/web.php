<?php

use App\Http\Controllers\Deploy;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('/deploy')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/basic', [Deploy\BasicController::class, 'index'])->name('deploy.basic');
    Route::post('/basic', [Deploy\BasicController::class, 'update'])->name('deploy.basic');
});

require __DIR__.'/auth.php';
