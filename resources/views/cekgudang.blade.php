@extends('admin.admin-index')
@section('title', 'Dashboard')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cek Gudang</h1>
    </div>

    <!-- Content Row -->
    <div class="align-content-center justify-content-center row">
        <div class="card m-3 col-5" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        @forelse ($tambah_gudangs as $item)
                        <h5 class="card-title">Tepung 100gr</h5>

                        <h1>{{$item->tepung100gr}}</h1>
                        @empty

                        @endforelse
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card m-3 col-5" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        @forelse ($tambah_gudangs as $item)
                        <h5 class="card-title">Tepung 50gr</h5>

                        <h1>{{$item->tepung50gr}}</h1>
                        @empty

                        @endforelse
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card m-3 col-5" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        @forelse ($tambah_gudangs as $item)
                        <h5 class="card-title">Santan</h5>

                        <h1>{{$item->santan}}</h1>
                        @empty

                        @endforelse
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card m-3 col-5" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        @forelse ($tambah_gudangs as $item)
                        <h5 class="card-title">Garam</h5>

                        <h1>{{$item->garam}}</h1>
                        @empty

                        @endforelse
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card m-3 col-5" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        @forelse ($tambah_gudangs as $item)
                        <h5 class="card-title">Pecel</h5>

                        <h1>{{$item->pecel}}</h1>
                        @empty

                        @endforelse
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card m-3 col-5" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        @forelse ($tambah_gudangs as $item)
                        <h5 class="card-title">Bumbu (RB) </h5>

                        <h1>{{$item->bumbu}}</h1>
                        @empty

                        @endforelse
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection