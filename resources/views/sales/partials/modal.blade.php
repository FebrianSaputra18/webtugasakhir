<!-- Buat Laporan -->
<div class="modal fade bd-example-modal-lg" width="1000px" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Buat Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="BuatLaporanInsert" method="POST">
                @csrf
                <div class="modal-body">
                    <h6>Tanggal inputan</h6>
                    <input class="form-control mb-3" type="date" name="nonota" id="nonota">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
    $('#money').on('keydown', function(){
      var x = accounting.unformat($('#money').val())
      $('#money').val(x);
    });
    
    $('#money').on('keyup', function(){
      var x = accounting.formatMoney($('#money').val());
      $('#money').val(x);
    });
    // $('#money').on('focusout', function(){
    //   var x = accounting.formatMoney($('#money').val());
    //   alert(x);
    // });
  });
</script>