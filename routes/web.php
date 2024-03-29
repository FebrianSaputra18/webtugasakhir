<?php

use App\Http\Controllers\Admin\CekGudangController;
use App\Http\Controllers\Admin\DetailLaporanController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Sales\BuatLaporanController;
use App\Http\Controllers\Admin\NotifikasiController;
use App\Http\Controllers\Admin\PesananController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Sales\LihatLaporanController;
use App\Http\Controllers\Sales\NotifikasiPesananController;
use App\Http\Controllers\Sales\SalesLaporanController;
use App\Http\Controllers\TambahGudangController;
use Illuminate\Http\Request;
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

Route::middleware('auth')->get('/', function () {
    return view('loading');
});

// admin
Route::get('/admin-dashboard', function () {
    return view('admin.pages.admin-dashboard');
});


Route::get('/admin-data-sales', function () {
    return view('admin.pages.admin-cek-sales');
});

Route::get('/admin-data-supplier', function () {
    return view('admin.pages.admin-cek-supplier');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'sales'], function () {
    Route::resource('karyawan', UserController::class);
    Route::get('data-supplier', [UserController::class, 'supplier'])->name('data-supplier');
});




// Route::get('/detailLaporan', [DetailLaporanController::class]);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin-detail-laporan-sales', [DetailLaporanController::class, 'index']);
});

Route::get('/admin-buat-notifikasi', [NotifikasiController::class, 'index']);

Route::get('/notifikasi/create', [NotifikasiController::class, 'create']);

Route::post('NotifikasiInsert', [NotifikasiController::class, 'store']);

Route::get('/admin-buat-pesanan', [PesananController::class, 'index']);

Route::get('/pesanan/create', [PesananController::class, 'create']);

Route::post('PesananInsert', [PesananController::class, 'store']);

Route::get('/admin-cek-laporan-sales', [LaporanController::class, 'index']);

Route::get('/admin-tambah-barang-gudang', [TambahGudangController::class, 'index']);

Route::post('TambahGudang', [TambahGudangController::class, 'store']);

Route::get('/admin-cek-gudang', [CekGudangController::class, 'index']);



// Route::get('/admin-detail-laporan-sales', [DetailLaporanController::class, 'index']);

// endAdmin

// sales
Route::get('/sales-dashboard', function () {
    return view('sales.pages.dashboard');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/detail-laporan-sales', [SalesLaporanController::class, 'index']);

    Route::get('/sales-lihat-laporan', [LihatLaporanController::class, 'index']);

    Route::get('/sales-buat-laporan', [BuatLaporanController::class, 'index']);

    Route::get('/BuatLaporan/create', [BuatLaporanController::class, 'create']);

    Route::post('BuatLaporanInsert', [BuatLaporanController::class, 'store']);

    Route::get('/sales-cek-notifikasi', [NotifikasiPesananController::class, 'index']);
});

Route::get('/sales-cek-gudang', [CekGudangController::class, 'index']);

// endSales

Route::get('/loading', function () {
    return view('loading');
});

// supplier
Route::get('/supplier-dashboard', function () {
    return view('supplier.pages.dashboard');
});

Route::get('/supplier-lihat-laporan', function () {
    return view('supplier.pages.lihatlaporan');
});

// controler

Route::get('/current-user-role', function (Request $request) {
    return response()->json(['data' => $request->user()->role ?? null]);
});
