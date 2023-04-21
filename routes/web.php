<?php

use App\Http\Controllers\CommonController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

// NAVBAR ======================================
Route::get('/', [CommonController::class, 'homeIndex']);
Route::get('/about-us', [CommonController::class, 'about-us-index']);
Route::get('/FAQ', [CommonController::class, 'FAQ-index']);
Route::get('/blog', [CommonController::class, 'blog-index']);

// MAIN =========================================
Route::get('/dashboard', [CommonController::class, 'dashboard-index']);

// SIDEBAR =======================================
Route::get('/ringkasan', [CommonController::class, 'ringkasan-index']);
Route::get('/penarikan', [CommonController::class, 'penarikan-index']);
Route::get('/investasi', [CommonController::class, 'investasi-index']); // DROPDOWN
Route::get('/semua-bisnis', [CommonController::class, 'semua-bisnis-index']); // 1
Route::get('/aktivitas', [CommonController::class, 'aktivitas-index']); // 2
Route::get('/pertanyaan', [CommonController::class, 'pertanyaan-index']);
Route::get('/pengaturan', [CommonController::class, 'pengaturan-index']); // DROPDOWN
Route::get('/profil', [CommonController::class, 'profil-index']); // 1
Route::get('/log-audit', [CommonController::class, 'log-audit-index']); // 2
Route::get('/kata-sandi', [CommonController::class, 'kata-sandi-index']); // 3
Route::get('/verifikasi-identitas', [CommonController::class, 'verifikasi-identitas-index']); // 4

Route::middleware(['auth'])->group(function(){
});