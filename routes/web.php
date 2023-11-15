<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PesananController;
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
    return view('home', ['title' => 'Home']);
})->name('home');




// Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::resource('/paketjasa', \App\Http\Controllers\PaketJasaController::class);
Route::resource('/datapaketjasa', \App\Http\Controllers\DataPaketJasaController::class);
Route::resource('/pesanan', \App\Http\Controllers\PesananController::class);
// Route::resource('/riwayatpesanan', \App\Http\Controllers\RiwayatPesananController::class);
Route::resource('/pelanggan', \App\Http\Controllers\PelangganController::class);
Route::resource('/pembayaran', \App\Http\Controllers\PembayaranController::class);
Route::resource('/dashboard', DashboardController::class);

//Home
Route::get('about',   [HomeController::class, 'about'])->name('about');
Route::get('service', [HomeController::class, 'service'])->name('service');
Route::get('project', [HomeController::class, 'project'])->name('project');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');

//Login
Route::get('/login',   [AuthController::class, 'login'])->name('login');
Route::get('/register',   [AuthController::class, 'register'])->name('register');
Route::post('/login',   [AuthController::class, 'prosesLogin'])->name('proses.login');
Route::post('/register',   [AuthController::class, 'prosesRegister'])->name('proses.register');
Route::get('/logout',   [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth:admin,pelanggan'])->group(function () {
    Route::resource('/dashboard', DashboardController::class);
    // Route::get('/riwayat-pesanan', PesananController::class)->name('pesanan.riwayat');
});

Route::get('/pesanan.riwayat', [PesananController::class, 'riwayatPesanan'])->name('riwayatpesanan');
// Route::get('/pesanan.create', [PesananController::class, 'tambahPesanan'])->name('tambahpesanan');

Route::get('/pembayaran.index', [PembayaranController::class, 'index']);
Route::get('/pembayaran.status', [PembayaranController::class, 'edit'])->name('konfirmasistatus');
Route::get('/pembayaran.pembayaran/{pesanan_id}', [PembayaranController::class, 'pembayaran'])->name('pembayaran');
Route::post('/pembayaran.pembayaran/{pesanan_id}', [PembayaranController::class, 'store'])->name('bayar');

// Route::get('/pembayaran/{pesanan_id}', [PembayaranController::class, 'index'])->name('pembayaran.index');
// Route::get('/pembayaran.show/{id}', [PembayaranController::class, 'show'])->name('pembayaran.show');
