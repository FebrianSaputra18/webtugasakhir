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
                <form class="form-detail" action="#" method="post" id="myform">
                    <div class="form-left">
                        <h2>Informasi Umum</h2>
                        <div class="form-row">
                            <input type="text" name="username" class="username" id="username" placeholder="Username"
                                required>
                        </div>
                        <div class="form-row form-row-1">
                            <input type="text" name="first_name" id="first_name" class="input-text"
                                placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-row">
                            <select name="position">
                                <option value="position">Posisi</option>
                                <option value="director">Sales</option>
                                <option value="manager">Supplier</option>
                                <option value="employee">Staf</option>
                            </select>
                            <span class="select-btn">
                                <i class="zmdi zmdi-chevron-down"></i>
                            </span>
                        </div>
                        <div class="form-row">
                            <input type="text" name="company" class="company" id="company" placeholder="Perusahaan"
                                required>
                        </div>
                    </div>
                    <div class="form-right">
                        <h2>Informasi Kontak</h2>
                        <div class="form-row">
                            <input type="text" name="street" class="street" id="street" placeholder="Alamat" required>
                        </div>
                        <div class="form-row">
                            <input type="text" name="additional" class="additional" id="additional"
                                placeholder="Tambahan Informasi" required>
                        </div>
                        <div class="form-row">
                            <input type="text" name="zip" class="zip" id="zip" placeholder="Kode Pos" required>
                        </div>
                        <div class="form-group">
                            <div class="form-row form-row-1">
                                <input type="text" name="code" class="code" id="code" placeholder="Code +" required>
                            </div>
                            <div class="form-row form-row-2">
                                <input type="text" name="phone" class="phone" id="phone" placeholder="Phone Number"
                                    required>
                            </div>
                        </div>
                        <div class="form-checkbox">
                            <label class="container">
                                <p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
                                <input type="checkbox" name="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="Register Badge">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection