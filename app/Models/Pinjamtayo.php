<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjamtayo extends Model
{
    use HasFactory;

    protected $table = 'pinjamtayo';

    protected $fillable = [
        'id', 'ID_Peminjam', 'Nama', 'NIP_NIM', 'No_Hp', 'Email', 'Tujuan', 'Lokasi_Penjemputan', 'Tanggal_Peminjaman', 'Waktu_Peminjaman', 'Tanggal_Pengembalian', 'Waktu_Pengembalian', 'Bukti_Peminjaman', 'created_at', 'updated_at', 'Status'
    ];
}

// class PinjamtayoViewList extends Model
// {
//     use HasFactory;

//     protected $table = 'pinjamtayo';

//     protected $fillable = [
//         'id', 'ID_Peminjam', 'Nama', 'NIP_NIM', 'No_Hp', 'Email', 'Tujuan', 'Lokasi_Penjemputan', 'Tanggal_Peminjaman', 'Waktu_Peminjaman', 'Tanggal_Pengembalian', 'Waktu_Pengembalian', 'Bukti_Peminjaman', 'created_at', 'updated_at', 'Status'
//     ];
//     $statusOneData = PinjamtayoViewList::where('Status', 1)->get();
// }
