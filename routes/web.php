<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newsController;

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

Route::get('/', function () {return view('welcome');});

Route::get('/profil', function () {return view('user.profil');});

Route::get('/dashboard', function () {return view('user.lowongan');});

Route::get('/dashboard-2', function () {return view('user.dashboard_1-2');});

Route::get('/daftarLowongan', function () {return view('user.daftarLowongan');});
Route::get('/daftarLowongan-2', function () {return view('user.daftarLowongan_2');});

Route::get('/lowonganHomeExam', function () {return view('user.lowonganHomeExam');});

Route::get('/exam', function () {return view('user.exam');});
Route::get('/exam-2', function () {return view('user.exam__2');});
Route::get('/exam-nilai', function () {return view('user.exam__nilai');});

// Route::get('/lowongan', function () {return view('user.lowongan');});





// Route::resource('news', newsController::class);
// Route::get('/dashboard', [newsController::class, 'index'])->name('user.dashboard');
// Route::get('/news', [newsController::class, 'index'])->name('user.index');
// Route::get('/create-news', [newsController::class, 'create'])->name('user.create');
// Route::post('/post-news', [newsController::class, 'store'])->name('user.store');
// Route::get('/edit-news', [newsController::class, 'update'])->name('user.update');
