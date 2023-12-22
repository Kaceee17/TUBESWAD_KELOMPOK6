@extends('layouts.layout')

@section('content')
  <section id='form'>
    <div class="container">
      <h1 class="tambahh1">Tambah Data</h1>
      <p class="tambahp">Tambah Data Baru Anda Ke List</p>
      <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nama">Nama</label>
        <input id="nama" name="nama" type="text" required placeholder="Masukkan Nama ">
        <label for="username">Username</label>
        <input id="username" name="username" type="text" required placeholder="Masukkan Username ">
        <label for="address">Address</label>
        <input id="address" name="address" type="text" required placeholder="Masukkan Address ">
        <label for="level">Level</label>
        <input id="level" name="level" type="number" required placeholder="Masukkan level">
        <label for="actions">Actions</label>
        <input id="actions" name="actions" type="text" required placeholder="Masukkan actions">
        <button class="btn btn-danger" type="submit" style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>
@endsection
