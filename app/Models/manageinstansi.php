<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manageinstansi extends Model
{
    use HasFactory;
    protected $table = 
    'management_instansi';
    protected $fillable = [
        'nama_instansi',
        'lokasi',
        'jumlah_pegawai',
        'link_web_instansi',
    ];

}
