<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class PegawaiController extends Controller
{
    public function index_pegawai(){
        return view('admin/index_pegawai');
    }

    public function data_pegawai(){
        $pegawais = Pegawai::all();
        return view('admin/data_pegawai', compact('pegawais'));
    }

    public function add_pegawai(){
        return view('admin.add_pegawai');
    }

    public function store_pegawai(Request $request){
        $request->validate([
            'nip' => ['required', 'numeric'],
            'nama' => 'required',
            'jabatan' => 'required'
        ]);

        Pegawai::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan
        ]);

        return Redirect::route('data_pegawai');
    }

    public function edit_pegawai(Pegawai $pegawai){
        return view('admin.edit_pegawai', compact('pegawai'));
    }

    public function update_pegawai(Pegawai $pegawai, Request $request){
        $request->validate([
            'nip' => ['required', 'numeric'],
            'nama' => 'required',
            'jabatan' => 'required'
        ]);

        $pegawai->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan
        ]);

        return Redirect::route('data_pegawai');
    }

    public function delete_pegawai(Pegawai $pegawai){
        $pegawai->delete();

        return Redirect::route('data_pegawai');
    }
}
