<!-- resources/views/user/index.blade.php -->

@extends('layouts.layout')

@section('content')
  <section id="list">
    <div class="container">
      <h1>Daftar Pengguna</h1>
      @if (count($admin) > 0)
        <div class="table-responsive">
          <table class="table-striped table">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($admin as $admin)
                <tr>
                  <td>{{ $admin->nama }}</td>
                  <td>{{ $admin->username }}</td>
                  <td>{{ $admin->address }}</td>
                  <td>{{ $admin->level }}</td>
                  <td>{{ $admin->actions }}</td>


                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @else
        <p>Tidak ada data ini.</p>
      @endif
    </div>
  </section>
@endsection
