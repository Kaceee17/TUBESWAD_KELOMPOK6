<?php

namespace App\Http\Controllers;

use App\Models\Pinjamtayo;
use App\Models\peminjam;
use App\Models\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdmpeminjamanController extends Controller
{
    public function edit($id)
    {
        $peminjaman = peminjaman::find($id);
        $peminjam = peminjam::where('ID_Peminjam', $peminjaman->ID_Peminjam)->first();
        return view('peminjam.updatepeminjaman', compact('peminjaman', 'peminjam'));
    }

    public function updateStatusApprove($id)
    {
        $peminjaman = peminjaman::find($id);
        $peminjaman->Status = 2; // Ubah status menjadi 'Approve'
        $peminjaman->save();

        return redirect()->route('peminjam.indexpeminjaman')->with('success', '  Status data dengan id peminjaman ' . $id . ' berhasil diubah menjadi Approve  ');
    }

    public function updateStatusReject($id)
    {
        $peminjaman = peminjaman::find($id);
        $peminjaman->Status = 3; // Ubah status menjadi 'Reject'
        $peminjaman->save();

        return redirect()->route('peminjam.indexpeminjaman')->with('success', '  Status data dengan id peminjaman ' . $id . ' berhasil diubah menjadi Reject  ');
    }

    public function destroyAll($id)
    {
        // Hapus semua data dari tabel peminjaman
        $peminjaman = peminjaman::where('id', $id);
        $peminjaman->delete();

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('peminjam.indexpeminjaman')->with('success', '  Semua data dengan id peminjaman ' . $id . ' berhasil dihapus. ');
    }

    public function close_edit($id)
    {
        return redirect()->route('peminjam.indexpeminjaman')->with('success', '  Status data dengan id peminjaman ' . $id . ' tidak ada perubahan  ');
    }
}
