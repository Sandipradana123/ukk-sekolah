

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
     <title>Admin Dashboard</title>
  </head>
  <body>
    
    <nav class="navbar fixed-top bg-body-tertiary shadow-sm">
      <div class="container-fluid p-3">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img/smkLogo.png') }}" alt="logo" width="70px">
        </a>
  
        <div class="dropdown">
          <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('img/adminLogo.png') }}" alt="adminLogo" width="40px">
          </button>
        <ul style="margin-left: -7rem;" class="dropdown-menu position-absolute mt-2 p-2">
          <li>
            <a class="dropdown-item text-center" href="#">
            <img src="{{ asset('img/adminLogo.png') }}" alt="adminLogo" width="30px">
            </a>
          </li>
          <li>
            <a class="dropdown-item text-center text-secondary" href="#"> <span class="text-capitalize">{{ session('member.nama') }}</a>
            </span>
          </li>
          <hr>
          <li>
            <a class="dropdown-item text-center mb-2" href="#">Akun Terverifikasi <span class="text-primary"><i class="fa-solid fa-circle-check"></i></span></a>
          </li>
          <li>
<<<<<<< HEAD
            <a class="dropdown-item text-center p-2 bg-danger text-light rounded" href="signOut.php">Sign Out <i class="fa-solid fa-right-to-bracket"></i></a>
=======
            <a class="dropdown-item text-center p-2 bg-danger text-light rounded" href="{{ route('logout-admin') }}">Logout <i class="fa-solid fa-right-to-bracket"></i></a>
>>>>>>> main
          </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="mt-5 p-4">
      <?php
      // Mendapatkan tanggal dan waktu saat ini
      $date = date('Y-m-d H:i:s'); // Format tanggal dan waktu default (tahun-bulan-tanggal jam:menit:detik)
      // Mendapatkan hari dalam format teks (e.g., Senin, Selasa, ...)
      $day = date('l');
      // Mendapatkan tanggal dalam format 1 hingga 31
      $dayOfMonth = date('d');
      // Mendapatkan bulan dalam format teks (e.g., Januari, Februari, ...)
      $month = date('F');
      // Mendapatkan tahun dalam format 4 digit (e.g., 2023)
      $year = date('Y');
      ?>

      <h1 class="mt-5 fw-bold">Dashboard - <span class="fs-4 text-secondary"> <?php echo $day. " ". $dayOfMonth." ". " ". $month. " ". $year; ?> </span></h1>
    
      <div class="alert alert-success" role="alert">Selamat datang admin - <span class="fw-bold text-capitalize">{{ session('member.nama') }}</span> di Dashboard CuyPerpus</div>
      
      <div class="mt-4 p-3">

        <div class="d-flex flex-wrap justify-content-center gap-2">
        <div class="cardImg">
          <a href="{{ route('dashboard-member') }}">
            <img src="{{ asset('img/member.png') }}" alt="daftar buku" style="max-width: 100%;" width="600px">
          </a>
        </div>
        <div class="cardImg">
          <a href="{{ route('dashboard-daftarBuku') }}">
          <img src="{{ asset('img/bukuAdmin.png') }}" alt="daftar buku" style="max-width: 100%;" width="600px">
          </a>
        </div>

        <div class="cardImg">
          <a href="{{ route('pinjam.buku') }}">
            <img src="{{ asset('img/peminjaman.png') }}" alt="daftar buku" style="max-width: 100%;" width="600px">
          </a>
        </div>
        <div class="cardImg">
<<<<<<< HEAD
          <a href="{{ route('dashboard-pengembalian.buku') }}">
          <img src="{{ asset('img/pengembalianAdmin.png') }}" alt="daftar buku" style="max-width: 100%;" width="600px">
          </a>
        </div>
      
         <div class="cardImg">
          <a href="{{ route('dashboard-denda.buku') }}">
           <img src="{{ asset('img/denda.png') }}" alt="daftar buku" style="max-width: 100%;" width="600px">
           </a>
=======
          <a href="{{ route('pengembalian.buku-admin') }}">
          <img src="{{ asset('img/pengembalianAdmin.png') }}" alt="daftar buku" style="max-width: 100%;" width="600px">
          </a>
        </div>
    
>>>>>>> main
         </div>
        </div>

      </div>
      
    </div>
    
    <footer class="shadow-lg bg-subtle p-3">
      <div class="container-fluid d-flex justify-content-between">
<<<<<<< HEAD
      <p class="mt-2">Created by <span class="text-primary"> Mangandaralam Sakti</span> © 2023</p>
      <p class="mt-2">versi 1.0</p>
=======
      <p class="mt-2">Created by <span class="text-primary"> Sandi pradana</span> © 2024</p>
>>>>>>> main
      </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


<<<<<<< HEAD
{{-- @extends('komponen.style')

@section('content')

    <div class="mt-5 p-4">
      <?php
      // Mendapatkan tanggal dan waktu saat ini
      $date = date('Y-m-d H:i:s'); // Format tanggal dan waktu default (tahun-bulan-tanggal jam:menit:detik)
      // Mendapatkan hari dalam format teks (e.g., Senin, Selasa, ...)
      $day = date('l');
      // Mendapatkan tanggal dalam format 1 hingga 31
      $dayOfMonth = date('d');
      // Mendapatkan bulan dalam format teks (e.g., Januari, Februari, ...)
      $month = date('F');
      // Mendapatkan tahun dalam format 4 digit (e.g., 2023)
      $year = date('Y');
      ?>

      <h1 class="mt-5 fw-bold">Dashboard - <span class="fs-4 text-secondary"> <?php echo $day. " ". $dayOfMonth." ". " ". $month. " ". $year; ?> </span></h1>
    
      <div class="alert alert-success" role="alert">Selamat datang admin - <span class="fw-bold text-capitalize">{{ session('member.nama') }}</span> di Dashboard CuyPerpus</div>
      
      <div class="mt-4 p-3">

        <div class="d-flex flex-wrap justify-content-center gap-2">
        <div class="cardImg">
          <a href="{{ route('dashboard-member') }}">
            <img src="{{ asset('img/member.png') }}" alt="daftar member" style="max-width: 100%;" width="600px">
          </a>
        </div>
        <div class="cardImg">
          <a href="{{ route('dashboard-daftarBuku') }}">
          <img src="{{ asset('img/bukuAdmin.png') }}" alt="daftar buku" style="max-width: 100%;" width="600px">
          </a>
        </div>

        <div class="cardImg">
          <a href="{{ route('pinjam.buku') }}">
            <img src="{{ asset('img/peminjaman.png') }}" alt="peminjaman" style="max-width: 100%;" width="600px">
          </a>
        </div>
        <div class="cardImg">
          <a href="{{ route('dashboard-pengembalian.buku') }}">
          <img src="{{ asset('img/pengembalianAdmin.png') }}" alt="pengembalian" style="max-width: 100%;" width="600px">
          </a>
        </div>
      
         <div class="cardImg">
           <a href="{{ route('dashboard-denda.buku') }}">
           <img src="{{ asset('img/denda.png') }}" alt="daftar buku" style="max-width: 100%;" width="600px">
           </a>
         </div>
        </div>

      </div>
      
    </div>
    @endsection --}}
=======
>>>>>>> main
