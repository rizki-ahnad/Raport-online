<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiSemester extends Model
{
    use HasFactory;

    protected $fllable = [
        'nama_siswa',
        'nama_mapel',
        'nilai'
    ];

    
}
