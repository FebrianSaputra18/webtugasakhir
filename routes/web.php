<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sales\BuatlaporankaryawanController;

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

Route::get('/admin-tambah-karyawan', function () {
    return view('admin.pages.admin-tambah-karyawan');
});

Route::get('/admin-cek-gudang', function () {
    return view('cekgudang');
});

Route::get('/admin-buat-notifikasi', function () {
    return view('admin.pages.admin-buat-notifikasi');
});
// endAdmin

// sales
Route::get('/sales-dashboard', function () {
    return view('sales.pages.dashboard');
});

// Route::get('/sales-buat-laporan', function () {
//     return view('sales.pages.buatlaporan');
// });

Route::get('/sales-lihat-laporan', function () {
    return view('sales.pages.lihatlaporan');
});

Route::get('/sales-cek-gudang', function () {
    return view('cekgudang');
});
// endSales

Route::get('/loading', function () {
    return view('loading');
});
// supplier
Route::get('/supplier-dashboard', function () {
    return view('supplier.pages.dashboard');
});

Route::get('/current-user-role', function (Request $request) {
    return response()->json(['data' => $request->user()->role ?? null]);
});

Route::post('/sales-buat-laporan', [BuatlaporankaryawanController::class, 'store']);
Route::get('/sales-buat-laporan', [BuatlaporankaryawanController::class, 'create']);
