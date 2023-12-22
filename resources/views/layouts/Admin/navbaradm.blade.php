  <!-- Nav -->
  <nav class="navbar navbar-expand navbar-dark bg-danger">
    <div class="container py-2">
      <div class="navbar-nav justify-content-between w-100">
        <a class="nav-link active" href="/" aria-current="page">Dashboard</a>
        <div class="d-flex">
          <a class="nav-link" href="{{ route('admin.accpinjam') }}">Peminjaman</a>
          <a class="nav-link" href="{{ route('admin.accpembayaran') }}">Pembayaran</a>
          <a class="nav-link" href="{{ route('admin.createkendaraan') }}">Master Kendaraan</a>
          <a class="nav-link" href="{{ route('admin.createinstansi') }}">Manajemen Instansi</a>
          <a class="nav-link" href="{{ route('admin.manageuser.php') }}">Manajemen user</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Nav End -->
