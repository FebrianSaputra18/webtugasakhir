<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use App\Models\BuatLaporan;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BuatLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buatlaporans = BuatLaporan::all();
        // dd($notifikasis);
        return view('sales.pages.buatlaporan', ['buatlaporans' => $buatlaporans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('create');

        return view('sales.pages.buatlaporan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all('nota_id'));
        $last_user_nota_id = DB::table('buat_laporans')->where('user_id', Auth::user()->id)->latest()->first();
        if ($last_user_nota_id != null) {
            $nota_id = $last_user_nota_id->nota_id + 1;
        } else {
            $nota_id = 1;
        }
        // dd($nota_id);
        // BuatLaporan::create($request->all());
        BuatLaporan::create(array_merge($request->all(), ['user_id' => Auth::user()->id, 'nota_id' => $nota_id]));
        return view('sales.pages.buatlaporan');
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
