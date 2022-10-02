<?php

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

Route::get('/', function () {
    return view('login');
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
    return view('admin.pages.admin-cek-gudang');
});

Route::get('/admin-buat-notifikasi', function () {
    return view('admin.pages.admin-buat-notifikasi');
});
// endAdmin

// sales
Route::get('/sales-dashboard', function () {
    return view('sales.pages.dashboard');
});

Route::get('/sales-buat-laporan', function () {
    return view('sales.pages.buatlaporan');
});

Route::get('/sales-lihat-laporan', function () {
    return view('sales.pages.lihatlaporan');
});

Route::get('/sales-cek-gudang', function () {
    return view('sales.pages.cekgudang');
});
// endSales

// supplier
Route::get('/supplier-dashboard', function () {
    return view('supplier.pages.dashboard');
});
