<!-- Buat Laporan -->
{{-- <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Buat Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <h6>Tanggal inputan</h6>
                    <thead>
                        <tr role="row">
                            <th rowspan="1" colspan="1">Tepung100gr</th>
                            <th rowspan="1" colspan="1">Tepung50gr</th>
                            <th rowspan="1" colspan="1">Bumbu</th>
                            <th rowspan="1" colspan="1">Pecel</th>
                            <th rowspan="1" colspan="1">Santan</th>
                            <th rowspan="1" colspan="1">Garam</th>
                            <th rowspan="1" colspan="1">Keterangan</th>
                            <th rowspan="1" colspan="1">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($buat_laporans as $buatLaporan)
                        <tr class="odd">
                            <td class="sorting_1">{{$buatLaporan->Tepung100gr}}</td>
                            <td class="sorting_1">{{$buatLaporan->Tepung50gr}}</td>
                            <td class="sorting_1">{{$buatLaporan->Bumbu}}</td>
                            <td class="sorting_1">{{$buatLaporan->Bumbu}}</td>
                            <td>{{$buatLaporan->created_at}}</td>
                            <td><a href="" class="btn btn-sm btn-primary">Lihat</a> <button
                                    onclick="deleteData('{{$buatLaporan->id}}')"
                                    class="btn btn-sm btn-danger">Hapus</button></ td>
                        </tr>

                        @empty
                        <h6>belum ada pesanans</h6>

                        @endforelse
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
</div> --}}

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