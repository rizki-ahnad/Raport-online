@extends('layouts.dashboard')
@extends('layouts.app_admin')

@section('content_admin')
<div class="mb-5">
    <h2>Data Kelas di SMA N 1 Terisi</h2>
</div>
<div class="container text-center">
    <div class="row">
      <div class="col-lg-4">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kelas 10
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item active" href="#">IPA</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPA 1</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPA 2</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPA 3</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPA 4</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPA 5</a></li>
                <li><a class="dropdown-item active" href="#">IPS</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPS 1</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPS 2</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPS 3</a></li>
            </ul>
          </div>
      </div>
      <div class="col-lg-4">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kelas 11
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item active" href="#">IPA</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPA 1</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPA 2</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPA 3</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPA 4</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPA 5</a></li>
                <li><a class="dropdown-item active" href="#">IPS</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPS 1</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPS 2</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPS 3</a></li>
            </ul>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kelas 12
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item active" href="#">IPA</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPA 1</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPA 2</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPA 3</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPA 4</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPA 5</a></li>
                <li><a class="dropdown-item active" href="#">IPS</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPS 1</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPS 2</a></li>
                <li><a class="dropdown-item" href="#">Kelas IPS 3</a></li>
            </ul>
        </div>
      </div>
    </div>
  </div>
@endsection