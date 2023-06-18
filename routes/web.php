<?php

use App\Http\Controllers\SampahController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SampahController::class, 'index']);
Route::get('/sampah/create', [SampahController::class, 'create']);
Route::post('/sampah/store', [SampahController::class, 'store']);
Route::get('/sampah/{id}', [SampahController::class, 'show']);
Route::get('/sampah/edit/{id}', [SampahController::class, 'edit']);
Route::patch('/sampah/update/{id}', [SampahController::class, 'update']);
Route::delete('/sampah/delete/{id}', [SampahController::class, 'destroy']);
Route::get('/show/trash', [SampahController::class, 'trash']);
Route::get('/trash/restore/{id}', [SampahController::class, 'restore'])->name('restore');
Route::get('/trash/delete/permanent/{id}', [SampahController::class, 'permanent'])->name('deletePermanent');

Route::get('/sampah/search', [SampahController::class, 'search']);