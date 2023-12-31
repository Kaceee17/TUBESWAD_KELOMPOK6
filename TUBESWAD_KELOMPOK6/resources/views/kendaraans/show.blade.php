@extends('kendaraans.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start" style="line-height: 2;">
                    Detail Kendaraan
                </div>
                <div class="float-end">
                    <a href="{{ route('kendaraans.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                
                <div class="row">
                    <label for="jenis_kendaraan" class="col-md-4 col-form-label text-md-end text-start"><strong>Jenis Kendaraan:</strong></label>
                    <div class="col-md-6" style="line-height: 45px;">
                        {{ $kendaraan->jenis_kendaraan }}
                    </div>
                </div>
                
                <div class="row">
                    <label for="merk_kendaraan" class="col-md-4 col-form-label text-md-end text-start"><strong>Merk Kendaraan:</strong></label>
                    <div class="col-md-6" style="line-height: 45px;">
                        {{ $kendaraan->merk_kendaraan }}
                    </div>
                </div>

                <div class="row">
                    <label for="warna_kendaraan" class="col-md-4 col-form-label text-md-end text-start"><strong>Warna Kendaraan:</strong></label>
                    <div class="col-md-6" style="line-height: 45px;">
                        {{ $kendaraan->warna_kendaraan }}
                    </div>
                </div>

                    <div class="row">
                        <label for="no_polisi" class="col-md-4 col-form-label text-md-end text-start"><strong>Nomor Polisi:</strong></label>
                        <div class="col-md-6" style="line-height: 45px;">
                            {{ $kendaraan->no_polisi }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection