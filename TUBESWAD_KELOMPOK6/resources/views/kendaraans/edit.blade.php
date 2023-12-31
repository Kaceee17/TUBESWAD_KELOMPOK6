@extends('layouts.sidebar')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="float-start" style="line-height: 2;">
                    Edit Kendaraan
                </div>
                <div class="float-end">
                    <a href="{{ route('kendaraans.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('kendaraans.update', $kendaraan->id) }}" method="post">
                    @csrf
                    @method("PUT")
                    
                    <div class="mb-3 row">
                        <label for="jenis_kendaraan" class="col-md-4 col-form-label text-md-end text-start">Jenis Kendaraan</label>
                        <div class="col-md-6">
                            <input type="type" class="form-control @error('jenis_kendaraan') is-invalid @enderror" id="jenis_kendaraan" name="jenis_kendaraan" value="{{ old('jenis_kendaraan') }}">
                            @if ($errors->has('jenis_kendaraan'))
                            <span class="text-danger">{{ $errors->first('jenis_kendaraan') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="merk_kendaraan" class="col-md-4 col-form-label text-md-end text-start">Merk Kendaraan</label>
                        <div class="col-md-6">
                            <input type="type" step="0.01" class="form-control @error('merk_kendaraan') is-invalid @enderror" id="merk_kendaraan" name="merk_kendaraan" value="{{ old('merk_kendaraan') }}">
                            @if ($errors->has('merk_kendaraan'))
                            <span class="text-danger">{{ $errors->first('merk_kendaraan') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="warna_kendaraan" class="col-md-4 col-form-label text-md-end text-start">Warna Kendaraan</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('warna_kendaraan') is-invalid @enderror" id="warna_kendaraan" name="warna_kendaraan" value="{{ old('warna_kendaraan') }}">
                            @if ($errors->has('warna_kendaraan'))
                                <span class="text-danger">{{ $errors->first('warna_kendaraan') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="no_polisi" class="col-md-4 col-form-label text-md-end text-start">Nomor Polisi</label>
                        <div class="col-md-6">
                          <input type="type" step="0.01" class="form-control @error('no_polisi') is-invalid @enderror" id="no_polisi" name="no_polisi" value="{{ old('no_polisi') }}">
                            @if ($errors->has('no_polisi'))
                                <span class="text-danger">{{ $errors->first('no_polisi') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection