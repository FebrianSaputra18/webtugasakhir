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
                            <input type="text" name="name" class="username" id="username" placeholder="Name" required value="{{$user->name??''}}">
                        </div>
                        <div class="form-row">
                            <select name="role">
                                <option value="" selected disabled>Role</option>
                                <option value="2" @if($user&&$user->role == '2') selected @endif>Sales</option>
                                <option value="3" @if($user&&$user->role == '3') selected @endif>Supplier</option>
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
                            <input type="text" name="address" class="street" id="street" placeholder="Alamat" required value="{{$user->address??''}}">
                        </div>
                        <div class="form-row">
                            <input type="text" name="phone_number" class="phone" id="phone" placeholder="Phone Number" required value="{{$user->phone_number??''}}">
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
        let url = "{{route('karyawan.store')}}";
        @if($user)
            url = "{{route('karyawan.update', $user->id)}}";
        @endif
        e.preventDefault();
        @if($user)
        axios.patch(url, $(this).serialize())
        @else
        axios.post(url, $(this).serialize())
        @endif
            .then(({
                data
            }) => {
                swal.fire({
                    icon: 'success',
                    title: 'Sukses',
                    @if($user)
                    html: 'Karyawan berhasil diupdate',
                    @else
                    html: 'Karyawan berhasil ditambahkan/, tambah lagi?',
                    showCancelButton:true
                    @endif
                })
                .then((res)=>{
                    if(res){
                        @if($user)
                        history.back();
                        @else
                        $("#myform")[0].reset();
                        window.location.reload();
                        @endif
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