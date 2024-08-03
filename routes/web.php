<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HibahController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\KembaliController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/anggota/', [AnggotaController::class, 'index']);
Route::get('/anggota/form/', [AnggotaController::class, 'create']);
Route::post('/anggota/store/', [AnggotaController::class, 'store']);
Route::get('/anggota/edit/{id}', [AnggotaController::class, 'edit']);
Route::put('/anggota/{id}', [AnggotaController::class, 'update']);
Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy']);

Route::get('/buku/', [BukuController::class, 'index']);
Route::get('/buku/form/', [BukuController::class, 'create']);
Route::post('/buku/store/', [BukuController::class, 'store']);
Route::get('/buku/edit/{id}', [BukuController::class, 'edit']);
Route::put('/buku/{id}', [BukuController::class, 'update']);
Route::delete('/buku/{id}', [BukuController::class, 'destroy']);

Route::get('/hibah/', [HibahController::class, 'index']);
Route::get('/hibah/form/', [HibahController::class, 'create']);
Route::post('/hibah/store/', [HibahController::class, 'store']);
Route::get('/hibah/edit/{id}', [HibahController::class, 'edit']);
Route::put('/hibah/{id}', [HibahController::class, 'update']);
Route::delete('/hibah/{id}', [HibahController::class, 'destroy']);

Route::get('/peminjaman/', [PeminjamanController::class, 'index']);
Route::get('/peminjaman/form/', [PeminjamanController::class, 'create']);
Route::post('/peminjaman/store/', [PeminjamanController::class, 'store']);
Route::get('/peminjaman/edit/{id}', [PeminjamanController::class, 'edit']);
Route::put('/peminjaman/{id}', [PeminjamanController::class, 'update']);
Route::delete('/peminjaman/{id}', [PeminjamanController::class, 'destroy']);

Route::get('/kembali/{id}', [KembaliController::class, 'kembali']);

Route::get('/kembali/', [KembaliController::class, 'index']);