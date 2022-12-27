<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index_guru(){
        return view('guru.index_guru');
    }
    public function data_kelas(){
        return view('guru.data_kelas');
    }
}
