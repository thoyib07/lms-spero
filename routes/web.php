<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\SuperAdminController;

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

// ini tambahan dari Thoyib

Route::get('/', function () {return view('user.login');});
Route::get('/regist', function () {return view('user.register');});

Route::get('/profil', function () {return view('user.profil');});

Route::get('/dashboard', function () {return view('user.lowongan');});

Route::get('/dashboard-2', function () {return view('user.dashboard_1-2');});

Route::get('/daftarLowongan', function () {return view('user.daftarLowongan');});
Route::get('/daftarLowongan-2', function () {return view('user.daftarLowongan_2');});

Route::get('/lowonganHomeExam', function () {return view('user.lowonganHomeExam');});

Route::get('/exam', function () {return view('user.exam');});
Route::get('/exam-2', function () {return view('user.exam__2');});
Route::get('/exam-nilai', function () {return view('user.exam__nilai');});
Route::get('/exam-vid', function () {return view('user.exam__vid');});

// Route::get('/lowongan', function () {return view('user.lowongan');});

// Route::resource('news', newsController::class);
// Route::get('/dashboard', [newsController::class, 'index'])->name('user.dashboard');
// Route::get('/news', [newsController::class, 'index'])->name('user.index');
// Route::get('/create-news', [newsController::class, 'create'])->name('user.create');
// Route::post('/post-news', [newsController::class, 'store'])->name('user.store');
// Route::get('/edit-news', [newsController::class, 'update'])->name('user.update');

Route::middleware(['web'])->group(function(){
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

$routes = [
    'superadmin',
    'admin',
    'agency',
];

foreach($routes as $routes){
    Route::prefix($routes)->group(function() use ($routes){
        Route::get('register', [AgencyController::class, 'register'])->name($routes.'.register');
        Route::post('postregister', [AgencyController::class, 'postregister'])->name($routes.'.postregister');
    });
}

Route::prefix('superadmin')->name('superadmin.')->group(function(){
    Route::middleware(['auth:web', 'checklevel:1'])->group(function(){
        Route::get('/dashboard', [SuperAdminController::class, 'dashboard'])->name('dashboard');
        Route::resource('admin', AdminController::class);
        Route::resource('agency', AgencyController::class);
        
    });
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['auth:web', 'checklevel:2'])->group(function(){
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::resource('agency', AgencyController::class);
    });
});

Route::prefix('agency')->name('agency.')->group(function(){
    Route::middleware(['auth:web', 'checklevel:3'])->group(function(){
        Route::get('/dashboard', [AgencyController::class, 'dashboard'])->name('dashboard');
        
    });
});
