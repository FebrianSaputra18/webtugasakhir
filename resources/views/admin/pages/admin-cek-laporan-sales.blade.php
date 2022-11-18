@extends('admin.admin-index')
@section('title', 'Dashboard')
@section('content')

<div class="container-fluid">

    <div class="row ">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lihat Laporan Sales</h1>
        </div>

        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
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
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$sales_count}}</div>
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
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$supplier_count}}</div>
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

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                            class="form-control form-control-sm" placeholder=""
                                            aria-controls="dataTable"></label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable" id="dataTable" role="grid"
                                    aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                                    <thead>
                                        <tr role="row">
                                            <th rowspan="1" colspan="1">Nama</th>
                                            <th rowspan="1" colspan="1">Nomor HP</th>
                                            <th rowspan="1" colspan="1">Role</th>
                                            <th rowspan="1" colspan="1">Alamat</th>
                                            <th rowspan="1" colspan="1">Tanggal</th>
                                            <th rowspan="1" colspan="1">Lihat Laporan</th>
                                            <th rowspan="1" colspan="1">Aksi</th>
                                        </tr>
                                    </thead>
                                    {{-- <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Name</th>
                                            <th rowspan="1" colspan="1">Phone</th>
                                            <th rowspan="1" colspan="1">Role</th>
                                            <th rowspan="1" colspan="1">Start date</th>
                                        </tr>
                                    </tfoot> --}}
                                    <tbody>
                                        @forelse ($users as $key => $user)
                                        <tr class="odd">
                                            <td class="sorting_1">{{$user->name}}</td>
                                            <td class="sorting_1">{{$user->phone_number}}</td>
                                            <td>{{$user->role==2?'Sales':'Supplier'}}</td>
                                            <td>{{$user->address}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td><a href="" class="btn btn-sm btn-info   ">Lihat</a></td>
                                            <td><a href="" class="btn btn-sm btn-primary">Edit</a><button
                                                    onclick="deleteData('{{$user->id}}')"
                                                    class="btn btn-sm btn-danger">Hapus</button></td>
                                        </tr>
                                        @empty
                                        <tr class="odd">
                                            <td class="sorting_1 text-center" colspan="4">Belum Ada Data</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{$users->links()}}
                        {{-- <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">
                                    Showing 1 to 10 of 57 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                                            <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0"
                                                class="page-link">Previous</a>
                                        </li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                aria-controls="dataTable" data-dt-idx="1" tabindex="0"
                                                class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                                data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                                data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                                data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                                data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable"
                                                data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                        <li class="paginate_button page-item next" id="dataTable_next"><a href="#"
                                                aria-controls="dataTable" data-dt-idx="7" tabindex="0"
                                                class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('script')
<script>
    const deleteData = (id) => {
            let url = "{{route('karyawan.destroy', ':id')}}";
            url = url.replace(':id', id);
            swal.fire({
                title:'Anda akan menghapus karyawan ini?',
                icon:'warning',
                showCancelButton:true
            })
            .then(({isConfirmed})=>{
                if (isConfirmed) {
                    axios.delete(url)
                    .then(()=>{
                        swal.fire({
                            icon:'success',
                            title:'Sukses',
                            text:'User Berhasil dihapus'
                        });
                        window.location.reload();
                    })
                    .catch((err)=>throwErr(err))
                }
            })
        };
</script>
@endsection