@extends('komponen.style')

@section('content')
    <div class="container p-3 mt-5">
      <div class="card p-2 mt-5">
      <h1 class="text-center fw-bold p-3">Form Edit buku</h1>
      <form action="{{ route('edit-buku-petugas',$reviewData->buku_id) }}" method="post" class="mt-3 p-2">
        @csrf
        @method('PUT')
      <div class="custom-css-form">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Id Buku</label>
          <input type="text" class="form-control" name="id_buku" id="exampleFormControlInput1" placeholder="example inf01" value="{{ $reviewData->buku_id }}">
        </div>
      </div>
    
      <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
        <select class="form-select" id="inputGroupSelect01" name="kategori">
            <option selected>{{$reviewData->kategoriBuku->nama_kategori}}</option>
          @foreach ($kategori as $item)
          <option value="{{ $item->kategori_id }}" 
            {{ $reviewData->kategori_id == $item->kategori_id ? 'selected' : '' }}>
            {{ $item->nama_kategori }}
        </option>
          @endforeach
        </select>
      </div>
        

      <label for="validationCustom01" class="form-label">Judul</label>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-book"></i></span>
          <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Buku" aria-label="Username" aria-describedby="basic-addon1" value="<?= $reviewData["judul"]; ?>">
          </div>
        
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Penulis</label>
          <input type="text" class="form-control" name="penulis" id="exampleFormControlInput1" placeholder="nama pengarang"  value="{{ $reviewData->penulis }}">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
          <input type="text" class="form-control" name="penerbit" id="exampleFormControlInput1" placeholder="nama penerbit"   value="<?= $reviewData["penerbit"]; ?>">
        </div>
        
        <label for="validationCustom01" class="form-label">Tahun Terbit</label>
        <div class="input-group mt-0 mb-5">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-calendar-days"></i></span>
          <input type="text" class="form-control" name="tahun_terbit" id="validationCustom01"  value="<?= $reviewData["tahun_terbit"]; ?>">
          </div>
          
      <button class="btn btn-success" type="submit" name="update">Edit</button>
      <a class="btn btn-danger" href="daftarBuku.php">Batal</a>
      </form>
    </div>
  </div>
@endsection