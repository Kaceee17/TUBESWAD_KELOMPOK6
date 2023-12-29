@extends('layouts.layout')

@section('content')
<section id='form'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <div class="container">
        <h2 class="fw-semibold fst-italic text-center"><b><u>INPUT PEMBAYARAN</u></b></h2>
        <form action="{{ route('peminjam.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
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
            @if(session('error'))
            <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
                <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </symbol>
            </svg>
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" width="16" height="16">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    {{ session('error') }}
                </div>
            </div>
            @endif

            <div class="card">
                <div class="card-body d-flex">
                    <div class="col-9.5">
                        <p><b><u>Detail Pembayaran</u></b></p>
                        <div class="col-1"></div>
                        <div class="col-auto">
                            <div class="row g-3 align-items-center">
                                <div class="input-group">
                                    <div class="col-2"><label for="tgl_pembayaran">Tanggal Bayar</label></div>
                                    <div class="col-0.5"><label>:</label></div>
                                    <div class="pe-0"><input type="date" class="form-control" name="tgl_pembayaran"></div>
                                </div>
                                    <div class="col-5"><label for="total_bayar"><h5 class="fw-semibold fst-italic text-center"><b><u>Rp. 2.000.000</u></b></h5></label></div>
                                <div class="input-group">
                                    <div class="col-2"><label for="jumlah_bayar">Jumlah Bayar</label></div>
                                    <div class="col-0.5"><label>:</label></div>
                                    <div class="col-9"><input type="text" class="form-control" name="jumlah_bayar" placeholder="..."></div>
                                </div>
                                <div class="input-group">
                                    <div class="col-2"><label for="sisa_bayar">Sisa Bayar</label></div>
                                    <div class="col-0.5"><label>:</label></div>
                                    <div class="col-9"><input type="text" class="form-control" name="sisa_bayar" placeholder="..."></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-auto">
                            <div class="row g-3 align-items-center">
                                <div class="input-group">
                                    <div class="col-2"><label for="keterangan">Keterangan</label></div>
                                    <div class="col-0.5"><label>:</label></div>
                                    <div class="col-9"><textarea class="form-control" name="keterangan" rows="3" placeholder="..."></textarea></div>
                                </div>
                                <div class="input-group">
                                    <div class="col-2"><label for="bukti_bayar">Bukti</label></div>
                                    <div class="col-0.5"><label>:</label></div>
                                    <div class="col-9"><input type="file" class="form-control-file" name="bukti_bayar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-0.5"></div>
                    <div class="col-3">
                        <div class="card" style="width: 15rem; background-color: #AD2727;">
                            <img src="{{ asset('images/minibus.jpg') }}" class="img-fluid mx-auto d-block" alt="tayooo" style="margin-top: 10px;">
                            <!-- <img src="../images/Tayo.jpg" class="card-img-top"  style="height: 140px; width: 200px" alt="tayooo"> -->
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:center; color: white;">Mini Bus</h5>
                                <p class="card-text" style="text-align:center; color: white;">16 Seats</p>
                                <br>
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                 <label class="form-check-label" for="flexCheckDefault">
                                    Supir
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Tour Guide
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    BBM
                                </label>
                                </div>
                                <br>
                                <br>
                                <h5 class="card-title" style="text-align:center; color: white;">Rp. 2.000.000</h5>
                                <br>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    <!-- <a class="btn btn-primary">Submit</a> -->
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>

<!-- @if ($errors->any())
<script>
    // Tampilkan pesan error menggunakan SweetAlert
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Ada kesalahan dalam inputan Anda. Silakan periksa kembali.',
    });
</script>
@endif -->

@endsection