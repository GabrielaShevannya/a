<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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
Route::get('/pasien', [userController::class,'index']);
Route::get('/pasien/tambah', [userController::class,'tambah']);
Route::get('/pasien/hapus/{id}', [userController::class,'hapus']);
Route::post('/pasien/store',[userController::class,'store']);
Route::get('/pasien/edit/{id}',[userController::class,'edit']);
Route::post('/pasien/update',[userController::class,'update']);
Route::get('/pasien/cari',[userController::class,'cari']);