<?php

use App\Http\Controllers\Admin\TamuController as AdminTamuController;
use App\Http\Controllers\User\TamuController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MediaPelayananController;
use App\Http\Controllers\JenisLayananController;
use App\Http\Controllers\SosialKependudukanController;
use App\Http\Controllers\EkonomiPerdaganganController;
use App\Http\Controllers\PertanianPertambanganController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Auth;
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

// Bagian Pengunjung
Route::get('/', [PengunjungController::class, 'index'])->name('index');
Route::resource('formTamu', PengunjungController::class);

// Bagian User
Route::post('simpan-bukutamu', [TamuController::class, 'simpanTamu'])->name('simpan-bukutamu');

//-----------------------------------------ADMIN---------------------------------------------//

// Bagian Customer
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('admin/tamu', [AdminTamuController::class, 'index'])->name('admin-tamu');
Route::get('admin/form-tambah', [AdminTamuController::class, 'formTambah'])->name('admin-form-tambah');
Route::post('admin/simpan-data',[AdminTamuController::class, 'simpanData'])->name('admin-simpan-data');
Route::get('admin/form-edit/{id}',[AdminTamuController::class, 'formEdit'])->name('admin-form-edit');
Route::post('admin/update-data/{id}', [AdminTamuController::class, 'updateTamu'])->name('admin-update-data');
Route::get('admin/show/{id}', [AdminTamuController::class, 'show'])->name('admin-show');
Route::post('admin/hapus-data', [AdminTamuController::class, 'hapusTamu'])->name('admin-hapus-data');
Route::post('/register', [AdminTamuController::class, 'register'])->name('register-admin');

// Bagian Autentikasi
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Bagian Pendidikan
Route::resource('pendidikan', PendidikanController::class);

// Bagian Media Pelayanan
Route::resource('mPelayanan', MediaPelayananController::class);

// Bagian Jenis Layanan
Route::resource('jLayanan', JenisLayananController::class);

// Bagian Pekerjaan
Route::resource('pekerjaan', PekerjaanController::class);

// Bagian Sosial dan Kependudukan
Route::resource('Sospen', SosialKependudukanController::class);

// Bagian Ekonomi dan Perdagangan
Route::resource('Ekopangan', EkonomiPerdaganganController::class);

// Bagian Pertanian dan Pertambangan
Route::resource('Pertama', PertanianPertambanganController::class);

// Bagian Transaksi
Route::resource('transaksi', TransaksiController::class);
