@extends('admin.admin-index')
@section('title', 'Dashboard')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Buat Notifikasi</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="page-content">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Notifikasi</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="text">Tepung 50gr</label>
                                <input type="text" class="form-control" id="bumbu" placeholder="Bumbu berapa pack?">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="text">Tepung 100gr</label>
                                <input type="text" class="form-control" id="tepung" placeholder="Tepung berapa karung?">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="text">Pecel Mahkota</label>
                                <input type="text" class="form-control" id="bumbu" placeholder="Bumbu berapa pack?">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="text">Santan Kita</label>
                                <input type="text" class="form-control" id="tepung" placeholder="Tepung berapa karung?">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="text">Bumbu (RB)</label>
                                <input type="text" class="form-control" id="bumbu" placeholder="Bumbu berapa pack?">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="text">Garam Los</label>
                                <input type="text" class="form-control" id="tepung" placeholder="Tepung berapa karung?">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date">Tanggal</label>
                            <input type="text" class="form-control" id="date"
                                placeholder="Hari, Tanggal - Bulan - Tahun">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Informasi Tambahan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <a href="#" class="btn btn-info btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-bell"></i>
                            </span>
                            <span class="text">Buat Notifikasi</span>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection