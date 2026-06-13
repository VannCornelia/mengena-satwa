<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SatwaController;

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
    return view('dashboard');
})->name('dashboard');

Route::get('/satwa', function () { return view('satwa'); });
Route::get('/kuis', function () { return view('kuis'); });
Route::get('/profile', function () { return view('profile'); });

Route::get('/satwa', [SatwaController::class, 'index']);

Route::get('/satwa/{id}', [App\Http\Controllers\SatwaController::class, 'show'])->name('satwa.show');