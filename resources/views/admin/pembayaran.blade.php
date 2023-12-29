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
                <th> Tanggal Bayar </th>
                <th> Jumlah Bayar </th>
                <th> Sisa Bayar </th>
                <th> Keterangan </th>
                <th> Bukti Pembayaran </th>
                <th> Action </th>       
              </tr>
            </thead>
            <tbody>
              @foreach ($pembayaran as $bus)
                <tr>
                  <td>{{ $bus->tanggal_bayar }}</td>
                  <td>{{ $bus->jumlah_bayar }}</td>
                  <td>{{ $bus->sisa_bayar }}</td>
                  <td>{{ $bus->keterangan }}</td>
                  <td>{{ $bus->foto }}</td>
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