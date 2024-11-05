@php $hideNavbarFooter = true; @endphp
@extends('komponen.style')

@section('content')

  <div class="container">
    <div class="card p-2 mt-5">
      <h1 class="pt-5 text-center fw-bold">Siswa login</h1>
      <hr>
    <form action="{{ route('siswa.login-request') }}" method="post" class="row g-3 p-4 needs-validation" novalidate>
      @csrf
    <label for="validationCustom01" class="form-label">Nama Lengkap</label>
  <div class="input-group mt-0">
    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
    <input type="text" class="form-control" name="nama" id="validationCustom01" required>
    <div class="invalid-feedback">
        Masukkan nama anda!
    </div>
  </div>
    <label for="validationCustom01" class="form-label">Nisn</label>
  <div class="input-group mt-0">
    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-hashtag"></i></span>
    <input type="number" class="form-control" name="nisn" id="validationCustom01" required>
    <div class="invalid-feedback">
        Masukkan Nisn anda!
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
  <p>Don't have an account yet? <a href="{{ route('registasi-member') }}" class="text-decoration-none text-primary">Sign Up</a></p>
</form>
</div>
</div>

<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
@endsection