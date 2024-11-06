<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary"> --}}
        <div class="container-fluid">

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.registasi') }}">Registasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.pendataan-barang') }}">Pendataan barang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.peminjaman') }}">Penjualan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.koleksi-pribadi') }}">Koleksi pribadi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.ulasan-buku') }}">Laporan</a>
              </li>
           
            </ul>
          </div>
        </div>
      </nav>
    
    @yield('content')
    @if(!isset($hideNavbarFooter))
    {{-- Navbar --}}
    <nav class="navbar fixed-top bg-body-tertiary shadow-sm">
      <div class="container-fluid p-3">
        <a class="navbar-brand" href="#">
          <h6>PERPUSTAKAAN SMKN 1 MEJAYAN</h6>
        </a>
        
        <a class="btn btn-tertiary" href="{{ route('dashboard-siswa') }}">Dashboard</a>
      </div>
    </nav>
@endif
    

    {{-- <footer class="shadow-lg bg-subtle p-3">
      <div class="container-fluid d-flex justify-content-between">
      <p class="mt-2">Created by <span class="text-primary"> Sandi pradana</span> © 2024</p>
      </div>
      </footer> --}}

      @if(!isset($hideNavbarFooter))
    {{-- Footer --}}
    <footer class=" shadow-lg bg-subtle p-3">
      <div class="container-fluid d-flex justify-content-between">
      <p class="mt-2">Created by <span class="text-primary"> Sandi pradana</span> © 2023</p>
      </div>
  </footer>
@endif
<<<<<<< HEAD
=======

<script src="{{ asset('js/script.js') }}"></script>
>>>>>>> main
     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>