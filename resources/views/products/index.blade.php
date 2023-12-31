@php
$products =\App\Models\Product::all();
@endphp
@extends('layouts.sidebar')

@section('content')
<section id="list">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <div class="container">
    <h2 class="fw-semibold fst-italic text-center"><b><u>PEMINJAMAN KENDARAAN</u></b></h2>
    <form action="{{ route('products.index') }}" method="GET">
      @if(session('success'))
      <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
      </svg>
      <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" width="16" height="16">
          <use xlink:href="#check-circle-fill" />
        </svg>
        <div>
          {{ session('success') }}
        </div>
      </div>
      @endif
      @can('create-product')
            <a href="{{ route('products.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Pinjam Kendaraan</a>
        @endcan
    @canany(['edit-product', 'delete-product'])
      <div class="form-group">
        <label for="statusFilter">Filter Status:</label>
        <select class="form-control" id="statusFilter" name="status">
          <option value="">-- All --</option>
          <option value="1">Waiting</option>
          <option value="2">Approve</option>
          <option value="3">Reject</option>
        </select>
        <button type="submit" class="btn btn-primary mt-2">Filter</button>
      </div>
    </form>
    @if (count($peminjaman) > 0)
    <div class="table-responsive">
      <table class="table-striped table">
        <thead>
          <tr>
            <th style="text-align: center;"> ID </th>
            <th style="text-align: center;"> ID_Peminjam </th>
            <th style="text-align: center;"> Tujuan </th>
            <th style="text-align: center;"> Lokasi_Jemput </th>
            <th style="text-align: center;"> Tgl_Pinjam </th>
            <th style="text-align: center;"> Waktu_Pinjam </th>
            <th style="text-align: center;"> Tgl_Pengembalian </th>
            <th style="text-align: center;"> Waktu_Pengembalian </th>
            <th style="text-align: center;"> Bukti_Pinjam </th>
            <th style="text-align: center;"> Status </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($peminjaman as $tayo)
          <tr>
            <td>{{ $tayo->id }}</td>
            <td>{{ $tayo->ID_Peminjam }}</td>
            <td>{{ $tayo->Tujuan }}</td>
            <td>{{ $tayo->Lokasi_Penjemputan }}</td>
            <td>{{ $tayo->Tanggal_Peminjaman }}</td>
            <td>{{ $tayo->Waktu_Peminjaman }}</td>
            <td>{{ $tayo->Tanggal_Pengembalian }}</td>
            <td>{{ $tayo->Waktu_Pengembalian }}</td>
            <td>
              @php
              $pathInfo = pathinfo($tayo->Bukti_Peminjaman);
              @endphp
              {{ $pathInfo['filename'] }}.{{ $pathInfo['extension'] }}
            </td>
            <td>
              @if (($tayo->Status) == 1)
              <a class="btn btn-warning" href="{{ route('products.edit', ['id' => $tayo->id]) }}" role="button">Waiting</a>
              @elseif (($tayo->Status) == 2)
              <a class="btn btn-success" href="{{ route('products.edit', ['id' => $tayo->id]) }}" role="button">Approve</a>
              @elseif (($tayo->Status) == 3)
              <a class="btn btn-danger" href="{{ route('products.edit', ['id' => $tayo->id]) }}" role="button">Reject</a>
              @else
              <a class="btn btn-primary" action="#" role="button">Nothing</a>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @else
    <p>Belum ada peminjaman kendaraan.</p>
    @endif
  </div>
  @endcanany
</section>

@endsection