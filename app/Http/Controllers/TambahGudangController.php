<?php

namespace App\Http\Controllers;

use App\Models\TambahGudang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TambahGudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tambah_gudangs = TambahGudang::all();
        return view('admin.pages.admin-tambah-barang-gudang', ['tambahgudang' => $tambah_gudangs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TambahGudang::create($request->all());
        return view('admin.pages.admin-tambah-barang-gudang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TambahGudang  $tambahGudang
     * @return \Illuminate\Http\Response
     */
    public function show(TambahGudang $tambahGudang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TambahGudang  $tambahGudang
     * @return \Illuminate\Http\Response
     */
    public function edit(TambahGudang $tambahGudang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TambahGudang  $tambahGudang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TambahGudang $tambahGudang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TambahGudang  $tambahGudang
     * @return \Illuminate\Http\Response
     */
    public function destroy(TambahGudang $tambahGudang)
    {
        //
    }
}
