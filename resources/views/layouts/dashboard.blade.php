<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="d-flex">
        <nav id="navbar-example3" class="navbar navbar-light bg-light flex-column align-items-stretch p-3 shadow-lg p-3 mb-5 bg-body rounded">
            <div class="d-flex justify-content-center mb-1">
                <img src="https://placeimg.com/50/50/any" alt="" class="rounded-circle">
            </div>
            <a class="navbar-brand ms-4" href="#">SMA N 1 Terisi</a>
            <hr>
            <nav class="nav nav-pills flex-column">
              <a class="nav-link" href="#item-1">Data Sekolah</a>
              <nav class="nav nav-pills flex-column">
                <a class="nav-link ms-3 my-1" href="{{ route('data_pegawai') }}"><i class="bi bi-clipboard-data-fill"></i> Data Pegawai</a>
                <a class="nav-link ms-3 my-1" href="#item-1-2"><i class="bi bi-clipboard-data-fill"></i> Data Mata Pelajaran</a>
              </nav>
              <a class="nav-link" href="#item-3">Data Siswa</a>
              <nav class="nav nav-pills flex-column">
                <a class="nav-link ms-3 my-1" href="#item-3-1"><i class="bi bi-clipboard2-data-fill"></i> Raport Siswa</a>
                <a class="nav-link ms-3 my-1" href="{{ route('data_kelas') }}"><i class="bi bi-clipboard2-data-fill"></i> Data Kelas</a>
              </nav>
              <a class="nav-link" href="#item-3">Profile Pengguna</a>
              <nav class="nav nav-pills flex-column">
                <a class="nav-link ms-3 my-1" href="#item-3-1"> <i class="bi bi-person-lines-fill"></i> Status Pengguna</a>
                <a class="nav-link ms-3 my-1" href="#item-3-2"><i class="bi bi-person-bounding-box"></i> Profile</a>
                <a class="nav-link ms-3 my-1" href="#item-3-2"><i class="bi bi-box-arrow-right"></i> Logout</a>
              </nav>
            </nav>
          </nav>
          <div class="ms-5">
            <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
                <div class="d-flex justify-content-center">
                    <div style="width: 20rem" class="shadow-lg p-3 mb-5 bg-body rounded me-4">
                        <h1>jam</h1>
                    </div>
                    <div style="width: 20rem" class="shadow-lg p-3 mb-5 bg-body rounded ms-4 me-4">
                        <h1>TGL</h1>
                    </div>
                    <div style="width: 20rem" class="shadow-lg p-3 mb-5 bg-body rounded ms-4">
                        <h1>TGL</h1>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-center mt-5">
                    <main class="py-0">
                        @yield('content_admin')
                    </main>
                </div>
            </div>
          </div>
    </div>
</body>
</html>
