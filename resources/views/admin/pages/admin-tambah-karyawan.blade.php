@extends('admin.admin-index')
@section('title', 'Dashboard')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Karyawan</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        <div class="page-content">
            <div class="form-v10-content">
                <form class="form-detail" action="{{route('karyawan.store')}}" method="post" id="myform">
                    @csrf
                    <div class="form-left">
                        <h2>Informasi Umum</h2>
                        <div class="form-row">
                            <input type="text" name="username" class="username" id="username" placeholder="Name" required>
                        </div>
                        <div class="form-row">
                            <select name="role">
                                <option value="" selected disabled>Role</option>
                                <option value="2">Sales</option>
                                <option value="3">Supplier</option>
                            </select>
                            <span class="select-btn">
                                <i class="zmdi zmdi-chevron-down"></i>
                            </span>
                        </div>
                        <div class="form-row">
                            <div class="badge badge-success d-block">Data berhasil ditambahkan</div>
                        </div>
                    </div>
                    <div class="form-right">
                        <h2>Informasi Kontak</h2>
                        <div class="form-row">
                            <input type="text" name="address" class="street" id="street" placeholder="Alamat" required>
                        </div>
                        <div class="form-row">
                            <input type="text" name="phone_number" class="phone" id="phone" placeholder="Phone Number" required>
                        </div>
                        <div class="form-row-last">
                            <!-- <button class="register" type="submit"></button> -->
                            <input type="submit" class="register" value="Register Badge">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection

@section('script')
<script>
    $("#myform").submit(function(e) {
        e.preventDefault();
        axios.post("{{route('karyawan.store')}}", $(this).serialize())
            .then(({
                data
            }) => {
                swal.fire({
                    icon: 'success',
                    title: 'Sukses',
                    html: 'Karyawan berhasil ditambahkan, tambah lagi?',
                    showCancelButton:true
                })
                .then((res)=>{
                    if(res){
                        $("#myform")[0].reset();
                        window.location.reload();
                    }else{
                        window.location.href = "{{route('karyawan.index')}}"
                    }
                })
            })
            .catch((err) => {
                throwErr(err)
            });
    });
</script>
@endsection