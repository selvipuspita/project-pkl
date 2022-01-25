<?php

use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\UraianController;
use Illuminate\Support\Facades\Route;

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

// MENAMPILKAN HALAMAN INDEX
Route::get('/', function () {
    return view('welcome');
});

// ADMIN
Route::middleware(['auth:sanctum', 'verified'])->get('Admin/Pegawai', 'App\Http\Controllers\AdminController@index')->name('DataPegawai');
Route::middleware(['auth:sanctum', 'verified'])->get('Dashboard', 'App\Http\Controllers\AdminController@dashboard', function () {
    return view('layouts.admin.dashboard');
})->name('DashboardAdmin');

// USERS
Route::middleware(['auth:sanctum', 'verified'])->resource('pengguna', PenggunaController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('Home', 'App\Http\Controllers\AdminController@dashboardUser', function () {
    return view('layouts.pengguna.dashboard');
})->name('DashboardUser');

// ROLE
Route::middleware(['auth:sanctum', 'verified'])->get('redirects','App\Http\Controllers\RoleController@role');

// Kegiatan Tabel
Route::middleware(['auth:sanctum', 'verified'])->resource('kegiatan', KegiatanController::class);

// Uraian Tabel
Route::middleware(['auth:sanctum', 'verified'])->resource('uraian', UraianController::class);

// PRINT
Route::middleware(['auth:sanctum', 'verified'])->get('/PrintLL/{id}','App\Http\Controllers\PrintController@printll')->name('printll');
Route::middleware(['auth:sanctum', 'verified'])->get('/PrintSPRL/{id}','App\Http\Controllers\PrintController@printsprl')->name('printsprl');

// Laporan
Route::middleware(['auth:sanctum', 'verified'])->get('/Laporan','App\Http\Controllers\AdminController@laporan')->name('Laporan');
