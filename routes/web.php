<?php

// use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Route;

// Halaman Dashboard
use App\Http\Controllers\DashboardController;
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Mahasiswa
use App\Http\Controllers\MahasiswaController;
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);

// Kajur
use App\Http\Controllers\KajurController;
Route::get('/kajur', [KajurController::class, 'index']);
Route::get('/kajur/create', [KajurController::class, 'create']);
Route::post('/kajur', [KajurController::class, 'store']);
Route::get('/kajur/{id}/edit', [KajurController::class, 'edit']);
Route::put('/kajur/{id}', [KajurController::class, 'update']);
Route::delete('/kajur/{id}', [KajurController::class, 'destroy']);

// Cuti
use App\Http\Controllers\CutiController;
Route::get('/cuti', [CutiController::class, 'index']);
Route::get('/cuti/create', [CutiController::class, 'create']);
Route::post('/cuti', [CutiController::class, 'store']);
Route::get('/cuti/{id}/edit', [CutiController::class, 'edit']);
Route::put('/cuti/{id}', [CutiController::class, 'update']);
Route::delete('/cuti/{id}', [CutiController::class, 'destroy']);

// User
use App\Http\Controllers\UserController;
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/user/{id}/edit', [UserController::class, 'edit']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);




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
