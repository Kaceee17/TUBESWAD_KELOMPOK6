@extends('layouts.sidebar')

@section('content')
  <section id='form-instan'>
    <div class="container">
      <h1 class="tambahh1">Tambah Instansi</h1>
      <p class="tambahp">Tambah instansi ke List Daftar Instansi</p>
      <form action="{{ route('manageinstansi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nama">Nama Instansi</label>
        <input id="nama" name="nama_instansi" type="text" required placeholder="Masukkan Nama Instansi">
        <label for="merk">Lokasi</label>
        <input id="brand" name="lokasi" type="text" required placeholder="Masukkan lokasi instansi">
        <label for="merk">Jumlah Pegawai</label>
        <input id="warna" name="jumlah_pegawai" type="text" required placeholder="Masukkan Jumlah Pegawai">
        <label for="merk">Link Web Instansi</label>
        <input id="tipe" name="link_web_instansi" type="text" required placeholder="Masukkan Link Web Instansi">
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>
@endsection
