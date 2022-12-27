<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiUts extends Model
{
    use HasFactory;

    protected $fllable = [
        'nama_siswa',
        'nama_mapel',
        'nilai'
    ];

    
}
