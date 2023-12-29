@extends('layouts.layout')

@section('content')
  <section id="list">
    <div class="container">
      <h1>Peminjaman Kendaraam</h1>
      @if (count($peminjaman) > 0)
        <div class="table-responsive">
          <table class="table-striped table">
            <thead>
              <tr>
                <th> id </th>
                <th> ID Peminjam </th>
                <th> Tujuan </th>
                <th> Lokasi Penjemputan </th>
                <th> Durasi Peminjaman </th>
                <th> Bukti Peminjaman </th>
                <th> Action </th>       
              </tr>
            </thead>
            <tbody>
              @foreach ($peminjaman as $tayo)
                <tr>
                  <td>{{ $tayo->id_peminjam }}</td>
                  <td>{{ $tayo->tujuan }}</td>
                  <td>{{ $tayo->lokasi_jemput }}</td>
                  <td>{{ $tayo->durasi }}</td>
                  <td>{{ $tayo->foto }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @else
        <p>Belum ada peminjaman kendaraan.</p>
      @endif
    </div>
  </section>
@endsection