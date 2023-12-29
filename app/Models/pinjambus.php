<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjambus extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';

    protected $fillable = [
        'id', 'tanggal_bayar', 'jumlah_bayar', 'sisa_bayar', 'keterangan', 'bukti_pembayaran', 'created_at', 'updated_at', 'Status'
    ];
}