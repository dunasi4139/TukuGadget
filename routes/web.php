<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\otentikasiController;


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
    return view('dashboard');
});
Route::get('/indexLogin', [otentikasiController::class, 'indexLogin'])->name('indexLogin');
Route::post('/login', [otentikasiController::class, 'login'])->name('login');

Route::post('/dashboard-login', function () {
    return view('dashboard-login');
});
