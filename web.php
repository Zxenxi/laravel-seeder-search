<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bukuformulirController;
use App\Http\Controllers\UsersController;

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
    return view('welcome');
});


// Route::get('/utama', [bukuformulirController::class, 'utama']);
// Route::post('/proses', [bukuformulirController::class, 'proses']);
// Route::get('data_users/tambah', [UsersController::class, 'tambah']);

Route::get('data_users', [UsersController::class, 'index']);

Route::get('data_barang', [UsersController::class, 'barang']);
Route::get('data_barang/cari', [UsersController::class, 'cari']);