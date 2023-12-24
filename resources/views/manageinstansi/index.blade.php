@extends('layouts.layout')

@section('content')
  <section id="list">
    <div class="container">
      <h1>Daftar Instansi</h1>
      @if (count($manageinstansi) > 0)
        <div class="table-responsive">
          <table class="table-striped table">
            <thead>
              <tr>
                <th>Nama Instansi</th>
                <th>Lokasi</th>
                <th>Jumlah Pegawai</th>
                <th>link Web Instansi</th>
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
            <!-- Tautan untuk menampilkan detail -->
            <a href="{{ route('manageinstansi.show', $instansi->id) }}">Show</a>

            <!-- Tautan untuk mengedit data -->
            <a href="{{ route('manageinstansi.edit', $instansi->id) }}">Edit</a>

            <!-- Form untuk menghapus data -->
            <form action="{{ route('manageinstansi.destroy', $instansi->id) }}" method="post" style="display: inline-block;">
                @csrf
                @method('delete')
                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
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