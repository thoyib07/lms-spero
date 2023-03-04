<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\lowonganController;
use App\Http\Controllers\Api\PostTestController;
use App\Http\Controllers\Api\NotifikasiController;
use App\Http\Controllers\Api\MateriController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('notifikasi', NotifikasiController::class);

// A G E N S I
Route::get('lowongan', [lowonganController::class, 'indexLowongan']);
Route::get('lowongan/{id}', [lowonganController::class, 'show'])->name('lowonganById');

// P O S T T E S T
Route::get('PostTest', [PostTestController::class, 'index']);

// M A T E R I
Route::get('materi', [MateriController::class, 'index']);