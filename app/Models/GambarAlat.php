<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GambarAlat extends Model
{
    protected $table = 'gambar_alat';   // nama tabel

    protected $fillable = [
        'nama_alat',
        'nomor_seri',
        'foto_alat',
    ];
}
