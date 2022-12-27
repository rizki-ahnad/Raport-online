<?php

namespace App\Http\Controllers;

use App\Models\BioSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

// use function Symfony\Component\String\b;

class BioSiswaController extends Controller
{
    public function index_siswa(){
        $user_id = Auth::id();
        $bio_siswas = BioSiswa::where('user_id', $user_id)->get();
        return view('siswa/index_siswa', compact('bio_siswas'));
    }

    public function create_bio(){
        $user_id = Auth::id();
        $bioSiswas = BioSiswa::where('user_id', $user_id)->get();
        return view('siswa.create_bio', compact('bioSiswas')); 
    }

    public function store_bio(Request $request){

        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'semester' => 'required'
        ]);

        $bioSiswa_id = BioSiswa::all()->count();
        if ($bioSiswa_id == null) {
            $nis = 1;
            $format = date('y').date('dm').$nis;
        }else{
            $nis = $bioSiswa_id + 1;
            $format = date('y').date('dmy').$nis;
        }

        $user_id = Auth::id();
        $id_bio = BioSiswa::where('user_id', $user_id)->get();

        // dd($bioSiswa_id);

        if ($id_bio == null || $bioSiswa_id == null) {
            BioSiswa::create([
                'nis' => $format,
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'jurusan' => $request->jurusan,
                'semester' => $request->semester,
                'user_id' => $user_id
            ]);
            return Redirect::route('index_siswa');
        }elseif($id_bio != null || $bioSiswa_id != null){
            BioSiswa::create([
                'nis' => $format,
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'jurusan' => $request->jurusan,
                'semester' => $request->semester,
                'user_id' => $user_id
            ]);
            return Redirect::route('index_siswa');
        }
        else{
            return Redirect::route('index_siswa');
        } 
        return Redirect::route('create_bio');
    }
}
