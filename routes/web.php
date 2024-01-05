<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuranController;

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

// Route::view('/', 'index');
// Route::view('/surah/show', 'show')->name('surah.show');

Route::get('/', [QuranController::class, 'index'])->name('surah.index');
Route::get('/surah/{id}', [QuranController::class, 'show'])->name('surah.show');