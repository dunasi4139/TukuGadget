<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\otentikasiController;
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

Route::get('/', function () {
    if (session('berhasil_Login')) {
        return view('afterlogin.dashboard');
    } else {
        return view('beforelogin.dashboard');
    }
});

// Route::group(['middleware' => 'cekLoginViewB'], function(){

// });
Route::get('indexLogin', [otentikasiController::class, 'indexLogin'])->name('indexLogin');

Route::post('login', [otentikasiController::class, 'login'])->name('login');

Route::get('indexRegister', [otentikasiController::class, 'indexRegister'])->name('indexRegister');

Route::post('register', [otentikasiController::class, 'register'])->name('register');

Route::get('logout', [otentikasiController::class, 'logout'])->name('logout');


