<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

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
