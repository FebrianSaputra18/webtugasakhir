<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin-dashboard">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('img/favicon.png')}}" alt="Image" height="55" width="50" class="pb-2">
        </div>
        <div class="sidebar-brand-text mx-3">UD.MAHMUDA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/admin-dashboard">
            <i class="fas fa-duotone fa-server"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fa-solid fa-user"></i>
            <span>Menu</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Atur Menu:</h6>
                <a class="collapse-item" href="{{route('karyawan.index')}}">Cek Data sales</a>
                <a class="collapse-item" href="{{route('data-supplier')}}">Cek Data supplier</a>
                <a class="collapse-item" href="{{route('karyawan.index')}}">Cek Laporan Sales</a>
                <a class="collapse-item" href="{{route('karyawan.create')}}">Tambah Karyawan</a>

            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa-solid fa-bell"></i>
            <span>Notifikasi</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Atur Notifikasi:</h6>
                <a class="collapse-item" href="/admin-cek-gudang">Cek Gudang</a>
                <a class="collapse-item" href="/admin-buat-pesanan">Buat Pesanan</a>
                <a class="collapse-item" href="/admin-buat-notifikasi">Buat Notifikasi</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->