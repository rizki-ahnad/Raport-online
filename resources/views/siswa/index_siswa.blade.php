@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bio Siswa') }}</div>
                
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <div>                       
                            <a href="{{ route('create_bio') }}" style="text-decoration: none"><i class="bi bi-pencil-square">Buat Bio</i></a>                               
                        </div>
                    </div>
                    @foreach ($bio_siswas as $bio_siswa)
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label">NIS (Nomor Induk Siswa)</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" disabled value="{{ $bio_siswa->nis }}">
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlInput2" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" disabled value="{{ $bio_siswa->nama }}">
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlInput3" class="form-label">Jurusan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" disabled value="{{ $bio_siswa->jurusan }}">
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlInput4" class="form-label">Kelas</label>
                            <input type="text" class="form-control" id="exampleFormControlInput4" disabled value="{{ $bio_siswa->kelas }}">
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlInput5" class="form-label">Semester</label>
                            <input type="text" class="form-control" id="exampleFormControlInput5" disabled value="{{ $bio_siswa->semester }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
