@extends('layouts.dashboard')
@extends('layouts.app_admin')

@section('content_admin')
    <div style="width: 65rem">
        <div class="mb-3">
            <a href="{{ route('add_pegawai') }}" class="btn btn-primary"><i class="bi bi-person-fill-add"></i></a>
        </div>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
        <table class="table table-success table-striped">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">NIP</th>
                  <th scope="col">Nama Pegawai</th>
                  <th scope="col">Jabatan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach($pegawais as $pegawai)       
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $pegawai->nip }}</td>
                  <td>{{ $pegawai->nama }}</td>
                  <td>{{ $pegawai->jabatan }}</td>
                  <td>
                    <form action="{{ route('delete_pegawai', $pegawai) }}" method="post">
                      @method('delete')
                      @csrf
                    <a href="{{ route('edit_pegawai', $pegawai) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                      <button type="submit" class="btn btn-danger"><i class="bi bi-person-x"></i></button>
                      <a href="{{ route('register_guru') }}" class="btn btn-success"><i class="bi bi-person-plus"></i></a>
                    </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
        </table>
    </div>
@endsection