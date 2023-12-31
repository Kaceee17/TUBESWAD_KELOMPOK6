@extends('layouts.sidebar')

@section('content')
  <section id='form-instan'>
    <div class="container">
      <h1 class="tambahh1">Edit Instansi</h1>
      <p class="tambahp">Edit dan update data ke List Instansi</p>
      <form action="{{ url('update-data/' . $instansi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nama">Nama Instansi</label>
        <input id="nama" name="nama_instansi" value="{{ $instansi->nama_instansi }}" type="text" required placeholder="Masukkan Nama Instansi">
        <label for="lokasi">Lokasi</label>
        <input id="lokasi" name="lokasi" value="{{ $instansi->lokasi }}" type="text" required placeholder="Masukkan lokasi instansi">
        <label for="jumlahpegawai">Jumlah Pegawai</label>
        <input id="jumlahpegawai" name="jumlah_pegawai" value="{{ $instansi->jumlah_pegawai}}" type="text" required placeholder="Masukkan Jumlah Pegawai">
        <label for="linkweb">Link Web Instansi</label>
        <input id="linkweb" name="link_web_instansi" value="{{ $instansi->link_web_instansi }}" type="text" required placeholder="Masukkan Link Web Instansi">
        <button class="btn btn-primary" type="submit" style="margin-top: 40px;">Update</button>
      </form>
    </div>
  </section>
@endsection
