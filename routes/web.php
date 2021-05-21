<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\otentikasiController;
use App\Http\Controllers\CRUD;
use App\Http\Controllers\ViewController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;

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



Route::group(['middleware' => 'auth'], function(){
    Route::get('logout', [otentikasiController::class, 'logout'])->name('logout');
    Route::get('jualBarang', [ViewController::class, 'indexJualBarang'])->name('jualBarang');
    Route::post('jualBarang', [CRUD::class, 'jualBarang'])->name('jualBarang');
    Route::get('profile', [CRUD::class, 'indexProfile'])->name('profile');
    Route::post('profile', [CRUD::class, 'updateProfile'])->name('profile');
 });
    Route::get('/', [CRUD::class, 'dashboard'])->name('dashboard');


Route::get('login', [otentikasiController::class, 'indexLogin'])->name('login');
Route::post('login', [otentikasiController::class, 'login'])->name('login');

Route::get('register', [otentikasiController::class, 'indexRegister'])->name('register');

Route::post('register', [otentikasiController::class, 'register'])->name('register');

Route::get('about', [ViewController::class, 'indexAbout'])->name('about');

Route::get('search', [CRUD::class, 'search'])->name('search');

Route::get('product', [CRUD::class, 'product'])->name('product');



Route::get('productDetail', [ViewController::class, 'showDetail'])->name('detail');
