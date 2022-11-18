@extends('supplier.index')
@section('title', 'Dashboard')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Lihat Pesanan</h1>
    </div>

    {{-- content sales --}}
    <div class="row">
        <div class="col-lg-12 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4 border-left-primary shadow h-100">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Lihat Laporan</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="text-center">
                            Pembukuan Nota Hasil Pemesanan Selama Perminggu
                        </div>

                        <div class="text-center mt-3 mb-0">
                            <a href="lihatpesanan" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-flag"></i>
                                </span>
                                <span class="text">Lihat Pesanan</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4 border-left-warning shadow h-100">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Lihat Laporan</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="text-center">
                            Pembukuan Nota Hasil Pemesanan Selama Perbulan
                        </div>

                        <div class="text-center mt-3 mb-0">
                            <a href="lihatpesanan" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-flag"></i>
                                </span>
                                <span class="text">Lihat Pesanan</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4 border-left-danger shadow h-100">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Lihat Laporan</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="text-center">
                            Pembukuan Nota Hasil Pemesanan Selama Pertahun
                        </div>

                        <div class="text-center mt-3 mb-0">
                            <a href="lihatpesanan" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-flag"></i>
                                </span>
                                <span class="text">Lihat Pesanan</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection