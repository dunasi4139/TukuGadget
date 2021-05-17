<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\otentikasiController;
use App\Http\Controllers\CRUD;
use Illuminate\Routing\RouteGroup;

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

Route::get('/', [otentikasiController::class, 'dashboardLogin'])->name('dashboardLogin');

Route::get('indexLogin', [otentikasiController::class, 'indexLogin'])->name('indexLogin');

Route::post('login', [otentikasiController::class, 'login'])->name('login');

Route::get('indexRegister', [otentikasiController::class, 'indexRegister'])->name('indexRegister');

Route::post('register', [otentikasiController::class, 'register'])->name('register');

Route::get('indexJualBarang', [CRUD::class, 'indexJualBarang'])->name('indexJualBarang');

Route::get('logout', [otentikasiController::class, 'logout'])->name('logout');


