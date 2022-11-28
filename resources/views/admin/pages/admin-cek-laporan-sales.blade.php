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
                            Pembukuan Nota Hasil Penjualan Selama Seminggu
                        </div>

                        <div class="text-center">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-bordered dataTable" id="dataTable" role="grid"
                                        aria-describedby="dataTable_info" style="width: 100%;" width="50%"
                                        cellspacing="0">
                                        <thead>
                                            <tr role="row">
                                                <th rowspan="1" colspan="1">Nama</th>
                                                <th rowspan="1" colspan="1">Nomor HP</th>
                                                <th rowspan="1" colspan="1">Tanggal Input</th>
                                                <th rowspan="1" colspan="1">No. Nota</th>
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
                                            @forelse ($buat_laporans as $buatLaporan)

                                            <tr class="odd">
                                                <td class="sorting_1">{{$buatLaporan->sales->name}}</td>
                                                <td class="sorting_1">{{$buatLaporan->sales->phone_number}}</td>
                                                <td>{{$buatLaporan->created_at}}</td>
                                                <td class="sorting_1">{{$buatLaporan->nonota}}</td>
                                                <td><a href="" class="btn btn-sm btn-primary">Lihat</a> <button
                                                        onclick="deleteData('{{$buatLaporan->id}}')"
                                                        class="btn btn-sm btn-danger">Hapus</button></td>
                                            </tr>
                                            @empty
                                            <tr class="odd">
                                                <td class="sorting_1 text-center" colspan="5">Belum Ada Data</td>
                                            </tr>

                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- <div class="col-lg-12 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4 border-left-warning shadow h-100">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Lihat Laporan</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        minggu
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
                    <div class="text-center">
                        minggu
                    </div>

                </div>
            </div>
        </div> --}}
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