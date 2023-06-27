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

Route::get('/', function () {return view('user.login');});
Route::get('/regist', function () {return view('user.register');});

Route::get('/profil', function () {return view('user.profil');});

Route::get('/dashboard', [materiFrontController::class, 'index']);
// Route::get('/dashboard', [materiFrontController::class, 'notifikasi']);

Route::get('/dashboard-2', function () {return view('user.dashboard_1-2');});

Route::get('/daftarLowongan', [LowonganFrontController::class, 'indexLowongan']);

Route::get('/daftarLowongan/{id}', [LowonganFrontController::class, 'show'])->name('detailLowongan');

Route::get('/lowonganHomeExam/{id}', [materiFrontController::class, 'lowonganHomeExam']);

// Route::get('/exam', [PostTestFrontController::class, 'index2']);
Route::get('/exam-2', function () {return view('user.exam__2');});
Route::get('/exam-nilai', function () {return view('user.exam__nilai');});
Route::get('/exam-vid', function () {return view('user.exam__vid');});

Route::get('/page-chat', function () {return view('user.pageChat');});


Route::get('/ulangan', [PostTestFrontController::class, 'index']);

// Route::get('/lowongan', function () {return view('user.lowongan');});

// Route::resource('news', newsController::class);
// Route::get('/dashboard', [newsController::class, 'index'])->name('user.dashboard');
// Route::get('/news', [newsController::class, 'index'])->name('user.index');
// Route::get('/create-news', [newsController::class, 'create'])->name('user.create');
// Route::post('/post-news', [newsController::class, 'store'])->name('user.store');
// Route::get('/edit-news', [newsController::class, 'update'])->name('user.update');

Route::middleware(['web'])->group(function(){
    Route::get('/', [LoginController::class, 'login'])->name('login');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::prefix('user')->name('user.')->group(function(){
    Route::get('register', [PendaftarController::class, 'register'])->name('register');
    Route::post('post-register', [PendaftarController::class, 'postregister'])->name('post-register');
});

Route::get('create-step-one', [AgensiController::class, 'createstepone'])->name('create-step-one');
Route::post('post-create-step-one', [AgensiController::class, 'postcreatestepone'])->name('post-create-step-one');
Route::get('create-step-two', [AgensiController::class, 'createsteptwo'])->name('create-step-two');
Route::post('post-create-step-two', [AgensiController::class, 'postcreatesteptwo'])->name('post-create-step-two');
Route::get('create-step-three', [AgensiController::class, 'createstepthree'])->name('create-step-three');
Route::post('post-create-step-three', [AgensiController::class, 'postcreatestepthree'])->name('post-create-step-three');

$routes = [
    'superadmin',
    'admin',
    'agensi',
];

foreach($routes as $routes){
    Route::prefix($routes)->group(function() use ($routes){
        Route::get('/agensi/verification', [AgensiController::class, 'verification'])->name($routes.'.agensi.verification');
        Route::put('/agensi/verification/{id}', [AgensiController::class, 'postverification'])->name($routes.'.agensi.postverification');

        Route::get('/project/terhapus', [ProjectController::class, 'terhapus'])->name($routes.'.project.terhapus');
        Route::put('/project/pulihkan/{id}', [ProjectController::class, 'pulihkan'])->name($routes.'.project.pulihkan');
        
        Route::get('/lowongan/terhapus', [LowonganController::class, 'terhapus'])->name($routes.'.lowongan.terhapus');
        Route::put('/lowongan/pulihkan/{id}', [LowonganController::class, 'pulihkan'])->name($routes.'.lowongan.pulihkan');

        Route::get('/materi/terhapus', [MateriController::class, 'terhapus'])->name($routes.'.materi.terhapus');
        Route::put('/materi/pulihkan/{id}', [MateriController::class, 'pulihkan'])->name($routes.'.materi.pulihkan');

        Route::get('/notifikasi/terhapus', [NotifikasiController::class, 'terhapus'])->name($routes.'.notifikasi.terhapus');
        Route::put('/notifikasi/pulihkan/{id}', [NotifikasiController::class, 'pulihkan'])->name($routes.'.notifikasi.pulihkan');
    });
}

Route::prefix('superadmin')->name('superadmin.')->group(function(){
    Route::middleware(['auth:web', 'checklevel:1'])->group(function(){
        Route::get('/dashboard', [SuperAdminController::class, 'dashboard'])->name('dashboard');

        Route::resource('admin', AdminController::class);
        Route::resource('agensi', AgensiController::class);
        Route::resource('user', PendaftarController::class);
        Route::resource('project', ProjectController::class);
        Route::resource('lowongan', LowonganController::class);
        Route::resource('materi', MateriController::class);
        Route::resource('notifikasi', NotifikasiController::class);
    });
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['auth:web', 'checklevel:2'])->group(function(){
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        Route::resource('agensi', AgensiController::class);
        Route::resource('user', PendaftarController::class);
        Route::resource('project', ProjectController::class);
        Route::resource('lowongan', LowonganController::class);
        Route::resource('materi', MateriController::class);
        Route::resource('notifikasi', NotifikasiController::class);
    });
});

Route::prefix('agensi')->name('agensi.')->group(function(){
    Route::middleware(['auth:web', 'checklevel:3'])->group(function(){
        Route::get('/dashboard', [AgensiController::class, 'dashboard'])->name('dashboard');
        Route::get('/settings', [AgensiController::class, 'settings'])->name('settings');
        Route::put('/postsettings', [AgensiController::class, 'postsettings'])->name('postsettings');
        

        Route::resource('project', ProjectController::class);
        Route::resource('lowongan', LowonganController::class);
        Route::resource('materi', MateriController::class);
        Route::resource('notifikasi', NotifikasiController::class);
    });
});
