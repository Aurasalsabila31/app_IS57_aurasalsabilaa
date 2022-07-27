<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RekmedController;
// use App\Http\Controllers\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/pasien', [PasienController::class, 'index']);
Route::get('/pasien/form', [PasienController::class, 'create']);
Route::post('/pasien/store', [PasienController::class, 'store']);
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);
Route::put('/pasien/{id}', [PasienController::class, 'update']);
Route::delete('/pasien/{id}', [PasienController::class, 'destroy']);

Route::get('/rekmed', [RekmedController::class, 'index']);
Route::get('/rekmed/form', [RekmedController::class, 'create']);
Route::post('/rekmed/store', [RekmedController::class, 'store']);
Route::get('/rekmed/edit/{id}', [RekmedController::class, 'edit']);
Route::put('/rekmed/{id}', [RekmedController::class, 'update']);
Route::delete('/rekmed/{id}', [RekmedController::class, 'destroy']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
