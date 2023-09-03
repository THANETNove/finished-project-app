<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PerformanceController;

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/edit-profile/{id}', [ProfileController::class, 'edit'])->name('edit-profile');
Route::put('/update-profile/{id}', [ProfileController::class, 'update'])->name('update-profile');
Route::get('/create-performance', [PerformanceController::class, 'create'])->name('create-performance');
Route::post('/new-performance', [PerformanceController::class, 'store'])->name('new-performance');
Route::get('/edit-performance/{id}', [PerformanceController::class, 'edit'])->name('edit-performance');
Route::put('/update-performance/{id}', [PerformanceController::class, 'update'])->name('update-performance');
