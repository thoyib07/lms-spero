<?php

use App\Models\Notifikasi;
// Angga
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AgensiController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\SuperAdminController;

// Alvin
use App\Http\Controllers\Front\materiFrontController;
use App\Http\Controllers\Front\LowonganFrontController;
use App\Http\Controllers\Front\PostTestFrontController;

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

Route::get('/', function () { return "masuk Home dulu"; });

// Route::middleware(['web'])->group(function(){
//     Route::get('/', [LoginController::class, 'login'])->name('login');
//     Route::get('/login', [LoginController::class, 'login'])->name('login');
//     Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
//     Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// });
