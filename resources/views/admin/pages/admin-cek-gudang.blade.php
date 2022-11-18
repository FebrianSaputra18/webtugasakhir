@extends('sales.index')
@section('title', 'Dashboard')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Karyawan</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="page-content">
            <div class="form-v10-content">
                <form class="form-detail" action="#" method="post" id="myform">
                    <div class="row">
                        <div class="form-left col-6">
                            <h2>Tepung Jempol Jago 100gr</h2>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputBumbu" placeholder="1XX">
                                </div>
                            </div>
                        </div>
                        <div class="form-right col-6">
                            <h2>Tepung Jempol Jago 50gr</h2>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputTepung" placeholder="1XX">
                                </div>
                            </div>
                        </div>
                        <div class="form-left col-6">
                            <h2>Pecel Mahkota</h2>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputBumbu" placeholder="1XX">
                                </div>
                            </div>
                        </div>
                        <div class="form-right col-6">
                            <h2>Santan Kita</h2>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputTepung" placeholder="1XX">
                                </div>
                            </div>
                        </div>
                        <div class="form-left col-6">
                            <h2>Bumbu Masak Rasa Baru</h2>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputBumbu" placeholder="1XX">
                                </div>
                            </div>
                        </div>
                        <div class="form-right col-6">
                            <h2>Garam Los</h2>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputTepung" placeholder="1XX">
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>

@endsection