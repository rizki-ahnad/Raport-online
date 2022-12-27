@extends('layouts.dashboard')
@extends('layouts.app_admin')

@section('content_admin')
    <div style="width: 65rem">
        <form action="{{ route('create_user') }}" method="post">
            @csrf
            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
            </div>
            <div class="mb-2">
                <label for="exampleFormControlInput2" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput2" name="email">
            </div>
            <div class="mb-2">
                <label for="exampleFormControlInput2" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleFormControlInput2" name="password">
            </div>
            <div class="mb-2">
                <label for="exampleFormControlInput3" class="form-label">Hak Akses</label>
                <select class="form-select" aria-label="Default select example" name="hak_akses">
                    <option selected>Pilih Hak Akses</option>
                    <option value="admin">Admin</option>
                    <option value="guru">Guru</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection