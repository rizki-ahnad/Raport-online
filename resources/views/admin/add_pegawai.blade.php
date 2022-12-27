@extends('layouts.dashboard')
@extends('layouts.app_admin')

@section('content_admin')
    <div style="width: 65rem">
        <form action="{{ route('store_pegawai') }}" method="post">
            @csrf
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">NIP (Nomor Induk Pegawai)</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nip">
            </div>
            <div class="mb-2">
                <label for="exampleFormControlInput2" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput2" name="nama">
            </div>
            <div class="mb-2">
                <label for="exampleFormControlInput3" class="form-label">Jabatan</label>
                <select class="form-select" aria-label="Default select example" name="jabatan">
                    <option selected>Pilih Jabatan</option>
                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                    <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                    <option value="Kesiswaan">Kesiswaan</option>
                    <option value="Guru">Guru</option>
                    <option value="TU">TU</option>
                    <option value="Admin">Admin</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection