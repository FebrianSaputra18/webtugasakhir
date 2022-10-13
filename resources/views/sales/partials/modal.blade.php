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
            <div class="modal-body">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th class="col-3">Nama Barang</th>
                            <th class="">Total Bawa</th>
                            <th class="">Laku</th>
                            <th class="">Uang</th>
                            <th class="">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Tepung 100gr</th>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>

                            <td>
                                <input type="text" class="form-control" id="money" aria-describedby="emailHelp"
                                    placeholder="Money">
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Tepung 50gr</th>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>

                            <td>
                                <input type="text" class="form-control" id="money" aria-describedby="emailHelp"
                                    placeholder="Money">
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Bumbu RB</th>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>

                            <td>
                                <input type="text" class="form-control" id="money" aria-describedby="emailHelp"
                                    placeholder="Money">
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Pecel</th>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>

                            <td>
                                <input type="text" class="form-control" id="money" aria-describedby="emailHelp"
                                    placeholder="Money">
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Santan</th>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>

                            <td>
                                <input type="text" class="form-control" id="money" aria-describedby="emailHelp"
                                    placeholder="Money">
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Beras Jagung</th>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>

                            <td>
                                <input type="text" class="form-control" id="money" aria-describedby="emailHelp"
                                    placeholder="Money">
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Garam</th>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>

                            <td>
                                <input type="text" class="form-control" id="money" aria-describedby="emailHelp"
                                    placeholder="Money">
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
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