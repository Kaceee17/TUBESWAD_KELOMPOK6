@extends('layouts.layout')

@section('content')
<section id='form'>
    <div class="container">
        @if(isset($peminjaman) && $peminjaman)
        <h2 class="fw-semibold fst-italic text-center"><b><u>UPDATE PEMINJAMAN</u></b></h2>
        <form action="{{ route('peminjam.updatepeminjaman', ['id' => $peminjaman->id]) }}" method="POST" enctype="multipart/form-data">
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
                                    <div class="col-2"><label for="id_peminjam">ID Peminjam</label></div>
                                    <div class="col-0.5"><label>:</label></div>
                                    <div class="col-9"><input type="text" class="form-control" name="id_peminjam" value="{{ $peminjaman->ID_Peminjam }}"></div>
                                </div>
                                <div class="input-group">
                                    <div class="col-2"><label for="nama_peminjam">Nama</label></div>
                                    <div class="col-0.5"><label>:</label></div>
                                    <div class="col-9"><input type="text" class="form-control" name="nama_peminjam" value="{{ $peminjaman->Nama }}"></div>
                                </div>
                                <div class="input-group">
                                    <div class="col-2"><label for="nip/nim">NIP / NIM</label></div>
                                    <div class="col-0.5"><label>:</label></div>
                                    <div class="col-9"><input type="text" class="form-control" name="nip/nim" value="{{ $peminjaman->NIP_NIM }}"></div>
                                </div>
                                <div class="input-group">
                                    <div class="col-2"><label for="no_hp">No. Hp</label></div>
                                    <div class="col-0.5"><label>:</label></div>
                                    <div class="col-9"><input type="text" class="form-control" name="no_hp" value="{{ $peminjaman->No_Hp }}"></div>
                                </div>
                                <div class="input-group">
                                    <div class="col-2"><label for="email">Email</label></div>
                                    <div class="col-0.5"><label>:</label></div>
                                    <div class="col-9"><input type="email" class="form-control" name="email" value="{{ $peminjaman->Email }}"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <p><b><u>Data Peminjaman</u></b></p>
                        <div class="col-1"></div>
                        <div class="col-auto">
                            <div class="input-group">
                                <div class="col-2"><label for="tujuan">Tujuan</label></div>
                                <div class="col-0.5"><label>:</label></div>
                                <div class="col-9"><textarea class="form-control" name="tujuan" rows="3">{{ $peminjaman->Tujuan }}</textarea></div>
                            </div>
                            <div class="input-group">
                                <div class="col-2"><label for="lokasi_jemput">Lokasi Jemput</label></div>
                                <div class="col-0.5"><label>:</label></div>
                                <div class="col-9"><input type="text" class="form-control" name="lokasi_jemput" value="{{ $peminjaman->Lokasi_Penjemputan }}"></div>
                            </div>
                            <div class="input-group">
                                <div class="col-2"><label for="waktu_pinjam">Durasi</label></div>
                                <div class="col-0.5"><label>:</label></div>
                                <div class="col-6">
                                    <div class="d-flex">
                                        <div class="pe-0">
                                            <input type="date" class="form-control" name="tgl_peminjaman" value="{{ $peminjaman->Tanggal_Peminjaman }}">
                                        </div>
                                        <div class="px-0">
                                            <input type="time" class="form-control" name="waktu_pinjam" value="{{ $peminjaman->Waktu_Peminjaman }}">
                                        </div>
                                        <div class="px-1">
                                            <label for="to">To</label>
                                        </div>
                                        <div class="ps-0">
                                            <input type="date" class="form-control" name="tgl_pengembalian" value="{{ $peminjaman->Tanggal_Pengembalian }}">
                                        </div>
                                        <div>
                                            <input type="time" class="form-control" name="waktu_pengembalian" value="{{ $peminjaman->Waktu_Pengembalian }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="col-2"><label for="bukti_pinjam">Bukti</label></div>
                                <div class="col-0.5"><label>:</label></div>
                                <div class="col-9"><img src="{{ $peminjaman->Bukti_Peminjaman }}" alt="Bukti Peminjaman" width="200"></div>
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