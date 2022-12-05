@extends('sales.index')
@section('title', 'Dashboard')
@section('content')

<div class="container-fluid">

    <div class="row ">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Laporan Sales</h1>
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
                    {{-- @forelse ($buat_laporans as $nota) --}}

                    <h6 class="m-0 font-weight-bold text-primary">Detail Laporan <span class="text-danger">No.
                            Nota</span>
                        {{-- {{ $nota->nonota}} --}}
                    </h6>
                    {{-- @empty
                    <h6 class="text-danger text-center">Nomer Nota Belum Ada</h6>

                    @endforelse --}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="col-3">Nama Barang</th>
                                        <th class="">Total Bawa</th>
                                        <th class="">Uang</th>
                                        <th class="">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($buat_laporans as $detailLaporan)
                                    <tr>
                                        <th scope="row">Tepung 100gr</th>
                                        <td>{{$detailLaporan->bawa100gr}}</td>
                                        <td id="money"><strong class="text-info">Rp.
                                            </strong>{{$detailLaporan->uang100gr}}
                                        </td>
                                        <td>{{$detailLaporan->keterangan100gr}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tepung 50gr</th>
                                        <td>{{$detailLaporan->bawa50gr}}</td>
                                        <td id="money"><strong class="text-info">Rp.
                                            </strong>{{$detailLaporan->uang50gr}}</td>
                                        <td>{{$detailLaporan->keterangan50gr}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Bumbu RB</th>
                                        <td>{{$detailLaporan->bawabumbu}}</td>
                                        <td id="money"><strong class="text-info">Rp.
                                            </strong>{{$detailLaporan->uangbumbu}}</td>
                                        <td>{{$detailLaporan->keteranganbumbu}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pecel</th>
                                        <td>{{$detailLaporan->bawapecel}}</td>
                                        <td id="money"><strong class="text-info">Rp.
                                            </strong>{{$detailLaporan->uangpecel}}</td>
                                        <td>{{$detailLaporan->keteranganpecel}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Santan</th>
                                        <td>{{$detailLaporan->bawasantan}}</td>
                                        <td id="money"><strong class="text-info">Rp.
                                            </strong>{{$detailLaporan->uangsantan}}</td>
                                        <td>{{$detailLaporan->keterangansantan}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Garam</th>
                                        <td>{{$detailLaporan->bawagaram}}</td>
                                        <td id="money"><strong class="text-info">Rp.
                                            </strong>{{$detailLaporan->uanggaram}}</td>
                                        <td>{{$detailLaporan->keterangangaram}}</td>
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