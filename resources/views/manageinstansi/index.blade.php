@extends('layouts.sidebar')

@section('content')
  <section id="list">
    <div class="container">
      
      <a href="{{ route('manageinstansi.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add</a>
      <a href="{{ route('manageinstansi.index') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> List</a>
      <div class="col-md-10 offset-md-2"></div>

      <!-- Moved the Daftar Instansi header here -->
      <h1 class="p-3 mb-2 bg-body-secondary text-center mb-3">Daftar Instansi</h1>

      @if (count($manageinstansi) > 0)
        <div class="table-responsive">
          <table class="table-striped table">
            <thead>
              <tr>
                <th>Nama Instansi</th>
                <th>Lokasi</th>
                <th>Jumlah Pegawai</th>
                <th>link Web Instansi</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($manageinstansi as $instansi)
                <tr>
                  <td>{{ $instansi->nama_instansi }}</td>
                  <td>{{ $instansi->lokasi }}</td>
                  <td>{{ $instansi->jumlah_pegawai }}</td>
                  <td>{{ $instansi->link_web_instansi }}</td>
                  <td>
                    <!-- Tautan untuk mengedit data -->
                    <a class="btn btn-warning" href="{{ route('manageinstansi.edit', $instansi->id) }}">Edit</a>
                    <!-- Form untuk menghapus data -->
                    <form action="{{ route('manageinstansi.destroy', $instansi->id) }}" method="post" style="display: inline-block;">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @else
        <p>Tidak ada daftar list instansi.</p>
      @endif
    </div>
  </section>
@endsection
