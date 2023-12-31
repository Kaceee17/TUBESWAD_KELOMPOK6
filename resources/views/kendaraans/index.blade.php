@extends('layouts.sidebar')


@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        <!-- @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif -->

        <div class="card">
            <div class="card-header font-weight-bold" style="text-align: center; font-size: 40px;">Daftar Kendaraan</div>
            <div class="card-body">
                <a href="{{ route('kendaraans.create') }}" class="btn btn-success btn-sm mb-3 float-end"><i class="bi bi-plus-circle"></i> Tambah Kendaraan Baru</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col" style="text-align: center;">#</th>
                        <th scope="col" style="text-align: center;">Jenis Kendaraan</th>
                        <th scope="col" style="text-align: center;">Merk Kendaraan</th>
                        <th scope="col" style="text-align: center;">Warna Kendaraan</th>
                        <th scope="col" style="text-align: center;">No Polisi</th>
                        <th scope="col" style="text-align: center;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($kendaraans as $kendaraan)
                        <tr>
                            <th scope="row" style="text-align: center; line-height: 2;">{{ $loop->iteration }}</th>
                            <td style="text-align: center; line-height: 2;">{{ $kendaraan->jenis_kendaraan }}</td>
                            <td style="text-align: center; line-height: 2;">{{ $kendaraan->merk_kendaraan }}</td>
                            <td style="text-align: center; line-height: 2;">{{ $kendaraan->warna_kendaraan }}</td>
                            <td style="text-align: center; line-height: 2;">{{ $kendaraan->no_polisi }}</td>
                            <td style="text-align: center; vertical-align: middle;">
                                <form action="{{ route('kendaraans.destroy', $kendaraan->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('kendaraans.edit', $kendaraan->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this kendaraan?');"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>Kendaraan Tidak Ditemukan!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>

                  {{ $kendaraans->links() }}

            </div>
        </div>
    </div>    
</div>
    
@endsection