@php $hideNavbarFooter = true; @endphp
@extends('komponen.style')

@section('content')
<div class="container">
    <div class="card p-2 mt-5">
      {{-- <div class="position-absolute top-0 start-50 translate-middle">
        <img src="../../assets/adminLogo.png" class="" alt="adminLogo" width="85px">
      </div> --}}
      <h1 class="pt-5 text-center fw-bold">Sign In</h1>
      <hr>
    <form action="{{ route('admin.login-request') }}" method="post" class="row g-3 p-4 needs-validation" novalidate>
      @csrf
    <label for="validationCustom01" class="form-label">Nama Lengkap</label>
  <div class="input-group mt-0">
    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
    <input type="text" class="form-control" name="nama_admin" id="validationCustom01" required>
    <div class="invalid-feedback">
        Masukkan Nama anda!
    </div>
  </div>
  <label for="validationCustom02" class="form-label">Password</label>
  <div class="input-group mt-0">
    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
    <input type="password" class="form-control" id="validationCustom02" name="password" required>
    <div class="invalid-feedback">
        Masukkan Password anda!
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="signIn">Sign In</button>
    <a class="btn btn-success" href="{{ route('home.login') }}">Batal</a>
  </div>
</form>
</div>
<?php if(isset($error)) : ?>
    <div class="alert alert-danger mt-2" role="alert">Nama atau Password Salah!</div>
<?php endif; ?>
  </div>
@endsection