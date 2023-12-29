<?php

namespace App\Http\Controllers;

use App\Models\Pinjamtayo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class pinjambusController extends Controller
{
    public function create()
    {
        return view('pembayaran.createpemabayaran');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'tanggal_bayar' => 'required|date',
                'jumlah_bayar' => 'required',
                'sisa_bayar' => 'required',
                'keterangan' => 'required',
                'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('bukti_pembayaran')) {
                $file = $request->file('bukti_pembayaran');
                $path = '/images/';
                $fileName = $file->getClientOriginalName();
                $file->move(public_path($path), $fileName);
            }

            pinjambus::create([
                'Tanggal Bayar' => $validatedData['tanggal_bayar'],
                'Jumlah Bayar' => $validatedData['jumlah_bayar'],
                'Sisa Bayar' => $validatedData['sisa_bayar'],
                'Keterangan' => $validatedData['keterangan'],
                'Bukti Pembayaran' => $path . $fileName,
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
            $pembayaran = pinjambus::where('Status', $status)->get();
        } else {
            $pembayaran = pinjambus::all(); // Jika tidak ada filter, ambil semua data
        }

        return view('peminjam.index', compact('peminjaman'));
    }
}
  
