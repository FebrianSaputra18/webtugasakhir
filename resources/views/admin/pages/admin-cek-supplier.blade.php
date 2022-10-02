@extends('admin.admin-index')
@section('title', 'Dashboard')
@section('content')

<div class="container-fluid">

    <div class="row">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Sek Data Supplier</h1>
        </div>

        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline mb-3 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-white border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Sales</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">19</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Supplier</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Pendapatan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 15.000.000</div>
                        </div>
                        <div class="col-auto">
                            {{-- <i class="fas fa-inbox-in fa-2x text-gray-300"></i> --}}
                            <i class="fas fa-inbox-in"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pengeluaran</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 10.000.000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Collapsable Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow mb-4 mr-auto">
                <img src="{{ asset('img/anime1.jpg')}}" alt="Image" height="220" width="235" class="align-self-center">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Kobo Kanaeru</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        Nama : Kobo Kanaeru<br>
                        Hobi : Game
                    </div>
                    <div class="card-body text-sm-center">
                        <a href="#" class="btn-sm btn-info btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-pencil"></i>
                            </span>
                            <span class="text">Edit</span>
                        </a>
                        <a href="#" class="btn-sm btn-danger btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Pecat</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow mb-4 mr-auto">
                <img src="{{ asset('img/anime1.jpg')}}" alt="Image" height="220" width="235" class="align-self-center">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Kobo Kanaeru</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        Nama : Kobo Kanaeru<br>
                        Hobi : Game
                    </div>
                    <div class="card-body text-sm-center">
                        <a href="#" class="btn-sm btn-info btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-pencil"></i>
                            </span>
                            <span class="text">Edit</span>
                        </a>
                        <a href="#" class="btn-sm btn-danger btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Pecat</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection