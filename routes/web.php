<?php

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardMemberController;
use App\Http\Controllers\DashboardPetugasController;
use App\Http\Controllers\DendaController;
use App\Http\Controllers\EditBukuController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\LoginPetugasController;
use App\Http\Controllers\LoginSiswaController;
use App\Http\Controllers\PeminjamanBukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianBukuController;
use App\Http\Controllers\TambahBukuController;
use App\Http\Controllers\TransaksiDendaController;
use App\Http\Controllers\TransaksiPengembalianController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TambahController;

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
// route login
Route::get('/', [LoginController::class, 'login'])->name('home.login');
Route::get('admin-login', [LoginController::class, 'adminLogin'])->name('admin.login');
Route::get('petugas-login', [LoginController::class, 'petugasLogin'])->name('petugas.login');
Route::get('siswa-login', [LoginController::class, 'siswaLogin'])->name('siswa.login');
Route::post('siswa-login-request', [LoginSiswaController::class, 'login'])->name('siswa.login-request');
Route::post('admin-login-request', [LoginAdminController::class, 'login'])->name('admin.login-request');
Route::post('petugas-login-request', [LoginPetugasController::class, 'login'])->name('petugas.login-request');

// route dashboard member
Route::get('dashboard-siswa', [DashboardMemberController::class, 'dashboard'])->name('dashboard-siswa');
Route::get('dashboard-member-buku', [DashboardMemberController::class, 'buku'])->name('dashboard-member.buku');
Route::get('dashboard-detail-buku-{id}', [DashboardMemberController::class, 'detailBuku'])->name('dashboard-detail.buku');

// route dasboard petugas
Route::get('dashboard-petugas', [DashboardPetugasController::class, 'dashboard'])->name('dashboard-petugas');
Route::get('dashboard-daftar-buku', [DashboardPetugasController::class, 'daftarBuku'])->name('dashboard-daftar-buku');

// route dashboard admin
Route::get('dashboard-admin', [DashboardAdminController::class, 'dashboard'])->name('dashboard-admin');
Route::get('dashboard-member', [DashboardAdminController::class, 'member'])->name('dashboard-member');

// route admin daftar buku
Route::get('dashboard-admin-daftar-buku', [DashboardAdminController::class, 'daftarBuku'])->name('dashboard-daftarBuku');


// route petugas daftar buku
Route::get('dashboard-petugas-daftar-buku', [DashboardPetugasController::class, 'daftarBuku'])->name('dashboard-petugas-daftarBuku');

// petugas tambah buku
Route::get('dashboard-petugas-tambah-buku', [DashboardPetugasController::class, 'tambahBuku'])->name('dashboard-petugas-tambahBuku');
Route::post('petugas-form-tambah-buku-request', [DashboardPetugasController::class, 'tambahBukuRequest'])->name('petugas.tambah-buku-request');


// route admin form edit buku
Route::get('dashboard-admin-form-edit-buku{id}', [DashboardAdminController::class, 'formEditBuku'])->name('dashboard-form-edit-buku');
Route::put('dashboard-admin-form-edit-buku-request{buku_id}', [EditBukuController::class, 'editBuku'])->name('edit-buku');


// form pinjam buku
Route::get('dashboard-pinjam-buku-{id}', [PeminjamanController::class, 'pinjamBuku'])->name('dashboard-pinjam.buku');

Route::post('pinjam-buku-request', [PeminjamanController::class, 'tambahPinjamBuku'])->name('pinjam-buku-request');

// admin peminjaman buku
Route::get('peminjaman-buku', [PeminjamanBukuController::class, 'peminjamanBuku'])->name('pinjam.buku');

// admin pengembalian buku
Route::get('pengembalian-buku', [PengembalianBukuController::class, 'pengembalianBuku'])->name('pengembalian.buku');

// admin daftarDenda
Route::get('pengembalian-buku', [DendaController::class, 'denda'])->name('denda.buku');

// transaksi peminjaman
Route::get('dashboard-peminjaman-buku', [DashboardMemberController::class, 'peminjamanBuku'])->name('dashboard-peminjaman.buku');

// transaksi pengembalian
Route::get('dashboard-pengembalian-buku', [TransaksiPengembalianController::class, 'pengembalian'])->name('dashboard-pengembalian.buku');

// transaksi denda
Route::get('dashboard-denda-buku', [TransaksiDendaController::class, 'denda'])->name('dashboard-denda.buku');


// filter buku
Route::post('buku-filter', [DashboardMemberController::class, 'buku'])->name('buku.filter');




Route::get('registasi', [AdminController::class, 'registasi'])->name('admin.registasi');
Route::get('pendataan-barang', [AdminController::class, 'pendataanBarang'])->name('admin.pendataan-barang');
Route::get('peminjaman', [AdminController::class, 'peminjaman'])->name('admin.peminjaman');
Route::get('ulasan-buku', [AdminController::class, 'ulasanBuku'])->name('admin.ulasan-buku');
Route::get('koleksi-pribadi', [AdminController::class, 'koleksiPribadi'])->name('admin.koleksi-pribadi');

Route::post('tambah-pendataan-barang', [TambahController::class, 'tambahDataBarang'])->name('admin.tambah-data-barang');


// route admin  tambah buku
Route::get('admin-form-tambah-buku', [TambahBukuController::class, 'tambahBuku'])->name('admin.tambah-buku');
Route::post('admin-form-tambah-buku-request', [TambahBukuController::class, 'tambahBukuRequest'])->name('admin.tambah-buku-request');