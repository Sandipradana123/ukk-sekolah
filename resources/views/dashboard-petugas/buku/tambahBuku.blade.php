@extends('komponen.style')

@section('content')
  <style>
    .custom-css-form {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
    }
  </style>
    <div class="container p-3 mt-5">
      <div class="card p-2 mt-5">
      <h1 class="text-center fw-bold p-3">Form Tambah buku</h1>
      <form action="{{ route('petugas.tambah-buku-request') }}" method="post"  class="mt-3 p-2">
        @csrf

        <div class="custom-css-form">
      </div>
    
      <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
        <select class="form-select" id="inputGroupSelect01" name="kategori">
          <option selected>Choose</option>
          @foreach ($kategori as $item)
          <option value="{{ $item->kategori_id }}">{{ $item->nama_kategori }}</option>
          @endforeach
          </select>
        </div>
        
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
          <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Buku" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
        
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Penulis</label>
          <input type="text" class="form-control" name="penulis" id="exampleFormControlInput1" placeholder="nama pengarang"  required>
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
          <input type="text" class="form-control" name="penerbit" id="exampleFormControlInput1" placeholder="nama penerbit"  required>
        </div>
        
        <label for="validationCustom01" class="form-label">Tahun Terbit</label>
        <div class="input-group mt-0 mb-5">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-calendar-days"></i></span>
          <input type="number" class="form-control" name="tahun_terbit" id="validationCustom01" required>
          </div>
          
      <button class="btn btn-success" type="submit" name="tambah">Tambah</button>
      <input type="reset" class="btn btn-warning text-light" value="Reset">
      </form>
    </div>
  </div>
@endsection