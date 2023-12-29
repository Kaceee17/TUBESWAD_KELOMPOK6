<?php

namespace App\Http\Controllers;

use App\Models\Pinjamtayo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PinjamtayoController extends Controller
{
    public function create()
    {
        return view('peminjam.createpeminjaman');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'id_peminjam' => 'required',
                'nama_peminjam' => 'required',
                'nip/nim' => 'required',
                'no_hp' => 'required',
                'email' => 'required|email',
                'tujuan' => 'required',
                'lokasi_jemput' => 'required',
                'tgl_peminjaman' => 'required|date',
                'waktu_pinjam' => 'required',
                'tgl_pengembalian' => 'required|date',
                'waktu_pengembalian' => 'required',
                'bukti_pinjam' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('bukti_pinjam')) {
                $file = $request->file('bukti_pinjam');
                $path = '/images/';
                $fileName = $file->getClientOriginalName();
                $file->move(public_path($path), $fileName);
            }

            Pinjamtayo::create([
                'ID_Peminjam' => $validatedData['id_peminjam'],
                'Nama' => $validatedData['nama_peminjam'],
                'NIP_NIM' => $validatedData['nip/nim'],
                'No_Hp' => $validatedData['no_hp'],
                'Email' => $validatedData['email'],
                'Tujuan' => $validatedData['tujuan'],
                'Lokasi_Penjemputan' => $validatedData['lokasi_jemput'],
                'Tanggal_Peminjaman' => $validatedData['tgl_peminjaman'],
                'Waktu_Peminjaman' => $validatedData['waktu_pinjam'],
                'Tanggal_Pengembalian' => $validatedData['tgl_pengembalian'],
                'Waktu_Pengembalian' => $validatedData['waktu_pengembalian'],
                'Bukti_Peminjaman' => $path . $fileName,
                'Status' => 1
            ]);

            return back()->with('success', '-- Data berhasil disimpan --');
        } catch (\Exception $e) {
            return back()->with('error', '-- Gagal menyimpan data. Silakan periksa kembali inputan Anda --');
        }
    }

    public function index(Request $request)
    {
        $status = $request->input('status'); // Ambil status dari request

        // Query data sesuai dengan status yang dipilih
        if ($status) {
            $peminjaman = Pinjamtayo::where('Status', $status)->get();
        } else {
            $peminjaman = Pinjamtayo::all(); // Jika tidak ada filter, ambil semua data
        }

        return view('peminjam.index', compact('peminjaman'));
    }
}
  
