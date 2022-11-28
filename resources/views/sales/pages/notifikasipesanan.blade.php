@extends('sales.index')
@section('title', 'Dashboard')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Notifikasi</h1>
    </div>

    <!-- Topbar Search -->

    {{-- content sales --}}
    <div class="row">
        <div class="col-lg-12 mb-4">

            <div class="table">
                <table class="table col-12">
                    <div class="row">
                        @forelse ($notifikasis as $item)
                        <div class="col-12 mb-2">
                            <h5 class="card-title bg-info text-white mb-0 border rounded-top text-center">Notifikasi
                                Baru
                                {{$item->created_at}}
                            </h5>
                            <div class="card-body bg-white border py-0">
                                <div class="row px-2">
                                    <div class="col-4">
                                        <h5>Tepung 100gr <span>kontol</span></h5>
                                        <h5>Tepung 50</h5>
                                    </div>
                                    <div class="col-4">
                                        <h5>Pecel</h5>
                                        <h5>Bumbu</h5>
                                    </div>
                                    <div class="col-4">
                                        <h5>Garam</h5>
                                        <h5>Santan</h5>
                                    </div>
                                </div>
                            </div>
                            <p class="card-text bg-success mx-0 rounded-bottom text-white text-center">
                            <h6 class="text-red">keterangan</h6>{{$item->keterangan}}</p>

                        </div>
                        @empty
                        <h6>Belum ada Notifikasi!!</h6>


                        @endforelse
                    </div>
                </table>
            </div>
        </div>

    </div>

    @endsection