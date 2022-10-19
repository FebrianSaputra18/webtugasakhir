<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buatlaporankaryawan;


class BuatlaporankaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sales-buat-laporan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales-buat-laporan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $post = Buatlaporankaryawan::create($input);

        $post = new Buatlaporankaryawan();

        // tepung100gr
        $post->bawa100gr = $request->bawa100gr;
        $post->laku100gr = $request->laku100gr;
        $post->uang100gr = $request->uang100gr;
        $post->keterangan100gr = $request->keterangan100gr;
        //tepung50gr
        $post->bawa50gr = $request->bawa50gr;
        $post->laku50gr = $request->laku50gr;
        $post->uang50gr = $request->uang50gr;
        $post->keterangan50gr = $request->keterangan50gr;
        //bumbu
        $post->bawabumbu = $request->bawabumbu;
        $post->lakubumbu = $request->lakubumbu;
        $post->uangbumbu = $request->uangbumbu;
        $post->keteranganbumbu = $request->keteranganbumbu;
        //pecel
        $post->bawapecel = $request->bawapecel;
        $post->lakupecel = $request->lakupecel;
        $post->uangpecel = $request->uangpecel;
        $post->keteranganpecel = $request->keteranganpecel;
        //santan
        $post->bawasantan = $request->bawasantan;
        $post->lakusantan = $request->lakusantan;
        $post->uangsantan = $request->uangsantan;
        $post->keterangansantan = $request->keterangansantan;
        //garam
        $post->bawagaram = $request->bawagaram;
        $post->lakugaram = $request->lakugaram;
        $post->uanggaram = $request->uanggaram;
        $post->keterangangaram = $request->keterangangaram;

        $post->save();

        return redirect('buatlaporan.blade.php');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
