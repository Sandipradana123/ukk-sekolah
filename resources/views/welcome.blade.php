@php $hideNavbarFooter = true; @endphp
@extends('komponen.style')

@section('content')
<div class="container p-5">
    <div class="d-flex justify-content-center">
      <div class="card" style="width: 30rem;">

      <div class="card-body pt-2">
        <h3 class="card-text text-center">Portal Login Perpustakaan</h3>
        <p class="card-text text-center">Silahkan pilih halaman login sesuai dengan status Anda</p>
      </div>
        <hr>
      <div class="card-body pt-2">
        <h4 class="card-text text-center">Akses Login</h4>
        <div class="row gap-2 p-2">
          <a class="btn btn-secondary" href="{{ route('admin.login') }}">Admin</a>
          <a class="btn btn-primary mb-2" href="{{ route('siswa.login') }}">Siswa</a>
          <hr>
          <a class="btn btn-success" href="../index.php">Kembali</a>
        </div>
      </div>
      </div>
    </div>
  </div>
@endsection

  
