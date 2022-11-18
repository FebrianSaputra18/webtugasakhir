@extends('sales.index')
@section('title', 'Dashboard')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Buat Laporan</h1>
    </div>

    {{-- content sales --}}
    <div class="row">
        <div class="col-lg-12 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4 border-left-warning shadow h-100">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Buat Laporan</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <div class="col-12">
                            <form action="BuatLaporanInsert" method="POST">
                                @csrf
                                <h6>Tanggal inputan</h6>
                                <input class="form-control mb-3 text-center" type="date" name="nonota" id="nonota">
                                <table class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            <th class="col-3">Nama Barang</th>
                                            <th class="">Total Bawa</th>
                                            <th class="">Uang</th>
                                            <th class="">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Tepung 100gr</th>
                                            <td>
                                                <input class="form-control" type="text" placeholder="Berapa Karung ?"
                                                    name="bawa100gr" id="bawa100gr">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" aria-describedby="emailHelp"
                                                    placeholder="Rp. 100xx" name="uang100gr" id="uang100gr">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="lunas/tidak"
                                                    name="keterangan100gr" id="keterangan100gr">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tepung 50gr</th>
                                            <td>
                                                <input class="form-control" type="text" placeholder="Berapa Karung ?"
                                                    name="bawa50gr" id="bawa50gr">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" aria-describedby="emailHelp"
                                                    placeholder="Rp. 100xx" name="uang50gr" id="uang50gr">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="lunas/tidak"
                                                    name="keterangan50gr" id="keterangan50gr">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Bumbu RB</th>
                                            <td>
                                                <input class="form-control" type="text" placeholder="Berapa Karung ?"
                                                    name="bawabumbu" id="bawabumbu">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" aria-describedby="emailHelp"
                                                    placeholder="Rp. 100xx" name="uangbumbu" id="uangbumbu">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="lunas/tidak"
                                                    name="keteranganbumbu" id="keteranganbumbu">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Pecel</th>
                                            <td>
                                                <input class="form-control" type="text" placeholder="Berapa Karung ?"
                                                    name="bawapecel" id="bawapecel">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" aria-describedby="emailHelp"
                                                    placeholder="Rp. 100xx" name="uangpecel" id="uangpecel">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="lunas/tidak"
                                                    name="keteranganpecel" id="keteranganpecel">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Santan</th>
                                            <td>
                                                <input class="form-control" type="text" placeholder="Berapa Karung ?"
                                                    name="bawasantan" id="bawasantan">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" aria-describedby="emailHelp"
                                                    placeholder="Rp. 100xx" name="uangsantan" id="uangsantan">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="lunas/tidak"
                                                    name="keterangansantan" id="keterangansantan">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Garam</th>
                                            <td>
                                                <input class="form-control" type="text" placeholder="Berapa Karung ?"
                                                    name="bawagaram" id="bawagaram">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" aria-describedby="emailHelp"
                                                    placeholder="Rp. 100xx" name="uanggaram" id="money">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="lunas/tidak"
                                                    name="keterangangaram" id="keterangangaram">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                            {{-- <button type="button" class="btn btn-primary btn-icon-split" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Buat Laporan</span>

                            </button> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection