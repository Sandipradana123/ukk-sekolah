@extends('komponen.style')

@section('content')
<div class="p-4 mt-5">
    <h2 class="mt-5">Form peminjaman Buku</h2>
    <div class="card">
      <h5 class="card-header">Data Lengkap buku</h5>
      <div class="card-body d-flex flex-wrap gap-5 justify-content-center">
          <?php foreach ($query as $item) : ?>
       
        <form action="{{ route('pinjam-buku-request') }}" method="post">
          @csrf
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Id Buku</span>
            <input type="text" class="form-control" placeholder="id buku" aria-label="Username" aria-describedby="basic-addon1" name="buku_id" value="{{ $item->buku_id }}" readonly>
            </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Kategori</span>
            <input type="text" class="form-control" placeholder="kategori" aria-label="kategori" aria-describedby="basic-addon1" value="{{ $item->kategoriBuku->nama_kategori }}" readonly>
            </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Judul</span>
            <input type="text" class="form-control" placeholder="judul" aria-label="judul" aria-describedby="basic-addon1" name="judul" value="<?= $item["judul"]; ?>" readonly>
            </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Penulis</span>
            <input type="text" class="form-control" name="penulis" placeholder="pengarang" aria-label="pengarang" aria-describedby="basic-addon1" value="{{ $item->penulis }}" readonly>
            </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Penerbit</span>
            <input type="text" class="form-control" name="penerbit" placeholder="penerbit" aria-label="penerbit" aria-describedby="basic-addon1" value="<?= $item["penerbit"]; ?>" readonly>
            </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Tahun Terbit</span>
            <input type="text" class="form-control" name="tahunTerbit" placeholder="tahun_terbit" aria-label="tahun_terbit" aria-describedby="basic-addon1" value="{{ $item->tahun_terbit }}" readonly>
            </div>
        <?php endforeach; ?>
        </form>
       </div>
      </div>
      
    
    <div class="alert alert-danger mt-4" role="alert">Silahkan periksa kembali data diatas, pastikan sudah benar sebelum meminjam buku!. jika ada kesalahan data harap hubungi admin</div>
    
    <div class="card mt-4">
      <h5 class="card-header">Form Pinjam Buku</h5>
      <div class="card-body">
        <form action="{{ route('pinjam-buku-request') }}" method="post">
          @csrf
          <div class="input-group mb-3 hidden">
            <span class="input-group-text" id="basic-addon1">Id Buku</span>
            <input type="text" name="buku_id" class="form-control" placeholder="id buku" aria-label="id_buku" aria-describedby="basic-addon1" value="{{ $item->buku_id }}" readonly>
            </div>

        <!-- Ambil data NISN user yang login-->
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Nisn</span>
          <input type="number" name="nisn" class="form-control" placeholder="nisn" aria-label="nisn" aria-describedby="basic-addon1" value="{{ session('member.nisn') }}" readonly>
      </div>
    <!--Ambil data id admin-->
   
    <div class="input-group mb-3 mt-3">
      <span class="input-group-text" id="basic-addon1">Tanggal pinjam</span>
      <input type="date" name="tgl_peminjaman" id="tgl_peminjaman" class="form-control" placeholder="id buku" aria-label="tgl_peminjaman" aria-describedby="basic-addon1" onchange="setReturnDate()" required>
</div>
<div class="input-group mb-3 mt-3">
      <span class="input-group-text" id="basic-addon1">Tenggat Pengembalian</span>
      <input type="date" name="tgl_pengembalian" id="tgl_pengembalian" class="form-control" placeholder="tgl_pengembalian" aria-label="tgl_pengembalian" aria-describedby="basic-addon1" readonly>
</div>
      
    <a class="btn btn-danger" href="../buku/daftarBuku.php"> Batal</a>
    <button type="submit" class="btn btn-success" name="pinjam">Pinjam</button>
    </form>
    </div>
    </div>
  
    <div class="alert alert-danger mt-4" role="alert"><span class="fw-bold">Catatan :</span> Setiap keterlambatan pada pengembalian buku akan dikenakan sanksi berupa denda.</div>
    
    </div>

    <script src="{{ asset('js/script.js') }}"></script>

@endsection