@extends('layouts.layout')

@section('content')
  <section id="list">
    <div class="container">
      <h1>My Showroom</h1>
      @if (count($users) > 0)
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
              @foreach ($user as $users)
                <tr>
                  <td>{{ $users->name }}</td>
                  <td>{{ $users->email }}</td>
                  <td>{{ $users->password }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @else
        <p>Tidak ada mobil di user yang terdaftar.</p>
      @endif
    </div>
  </section>
@endsection