@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bio Siswa') }}</div>
                <div class="card-body">
                    @foreach($bioSiswas as $bioSiswa)
                        @if(Auth::user()->id == $bioSiswa->user_id)
                            <div class="text-center">
                                <h3>Bio Data Sudah di Buat</h3>
                                <a href="{{ route('index_siswa') }}" class="btn btn-outline-dark">Back</a>
                            </div>
                        @else                            
                            <form action="{{ route('store_bio') }}" method="post">
                                @csrf                            
                                <label  class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            
                                <label  class="form-label">Kelas</label>
                                <input type="text" class="form-control" name="kelas">
                            
                                <label  class="form-label">Jurusan</label>
                                <input type="text" class="form-control" name="jurusan">
                            
                                <label  class="form-label">Semester</label>
                                <input type="text" class="form-control" name="semester">
                            
                                <button type="submit" class="btn btn-primary mt-2">Save</button>
                            </form>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
