<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraans';

    protected $fillable = [
        'id', 'jenis_kendaraan', 'merk_kendaraan', 'warna_kendaraan', 'no_polisi', 'created_at', 'updated_at'
    ];
}
