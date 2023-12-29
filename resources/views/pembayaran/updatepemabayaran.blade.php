@extends('layouts.layout')

@section('content')
<section id='form'>
    <div class="container">
        @if(isset($peminjaman) && $peminjaman)
        <h2 class="fw-semibold fst-italic text-center"><b><u>UPDATE PEMBAYARAN</u></b></h2>
        <form action="{{ route('peminjam.updatepeminjaman', ['id' => $pembayaran->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body d-flex">
                    <div class="col-9.5">
                        <p><b><u>Data Pribadi</u></b></p>
                        <div class="col-1"></div>
                        <div class="col-auto">
                            <div class="row g-3 align-items-center">
                                <div class="input-group">
                                    <div class="col-2"><label for="tgl_pembayaran">Tanggal Bayar</label></div>
                                    <div class="col-0.5"><label>:</label></div>
                                    <div class="pe-0">
                                            <input type="date" class="form-control" name="tgl_pembayaran" value="{{ $pembayaran->Tanggal_Bayar }}">
                                        </div>
                                </div>
                                <div class="col-5"><label for="total_bayar"><h5 class="fw-semibold fst-italic text-center"><b><u>Rp. 2.000.000</u></b></h5></label></div>
                                <div class="input-group">
                                    <div class="col-2"><label for="jumlah_bayar">Jumlah Bayar</label></div>
                                    <div class="col-0.5"><label>:</label></div>
                                    <div class="col-9"><input type="text" class="form-control" name="jumlah_bayar" value="{{ $pembayaran->Jumlah_Bayar }}"></div>
                                </div>
                                <div class="input-group">
                                    <div class="col-2"><label for="sisa_bayar">Sisa Bayar</label></div>
                                    <div class="col-0.5"><label>:</label></div>
                                    <div class="col-9"><input type="text" class="form-control" name="sisa_bayar" value="{{ $peminjaman->Sisa_Bayar }}"></div>
                                </div>
                                <div class="input-group">
                                    <div class="col-2"><label for="keterangan">Keterangan</label></div>
                                    <div class="col-0.5"><label>:</label></div>
                                    <div class="col-9"><input type="text" class="form-control" name="keterangan" value="{{ $pembayaran->Keterangan }}"></div>
                                </div>
                            <div class="input-group">
                                <div class="col-2"><label for="bukti_bayar">Bukti</label></div>
                                <div class="col-0.5"><label>:</label></div>
                                <div class="col-9"><img src="{{ $pembayaran->Bukti_Bayar }}" alt="Bukti Pembayaran" width="200"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-0.5"></div>
                    <div class="col-3">
                        <div class="card" style="width: 15rem; background-color: #AD2727;">
                        <img src="{{ asset('images/minibus.jpg') }}" class="img-fluid mx-auto d-block" alt="tayooo" style="margin-top: 10px;">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:center; color: white;">Mini Bus</h5>
                                <p class="card-text" style="text-align:center; color: white;">16 Seats</p>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <h5 class="card-title" style="text-align:center; color: white;">Rp. 2.000.000</h5>
                                <br>
                                <div class="d-grid gap-2">
                                    <div class="mb-2">
                                        @if ($peminjaman->Status != 1)
                                        <div class="mb-2">
                                            <a class="btn btn-secondary btn-block" href="{{ route('peminjam.closeupdatepeminjaman', ['id' => $peminjaman->id]) }}" role="button">Close</a>
                                        </div>
                                        @else
                                        <div class="mb-2">
                                            <a class="btn btn-success btn-block" href="{{ route('peminjaman.update.approve', ['id' => $peminjaman->id]) }}" role="button">Approve</a>
                                        </div>
                                        <div class="mb-2">
                                            <a class="btn btn-danger btn-block" href="{{ route('peminjaman.update.reject', ['id' => $peminjaman->id]) }}" role="button">Reject</a>
                                        </div>
                                        <div class="mb-2">
                                            <a class="btn btn-secondary btn-block" href="{{ route('peminjaman.destroyAll', ['id' => $peminjaman->id]) }}" role="button">Delete</a>
                                        </div>
                                        <div class="mb-2">
                                            <a class="btn btn-secondary btn-block" href="{{ route('peminjam.closeupdatepeminjaman', ['id' => $peminjaman->id]) }}" role="button">Close</a>
                                        </div>
                                        @endif
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @else
        <p>Belum ada peminjaman kendaraan.</p>
        @endif
    </div>
</section>
@endsection