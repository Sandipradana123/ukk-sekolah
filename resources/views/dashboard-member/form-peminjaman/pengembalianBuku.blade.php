@extends('komponen.style')

@section('content')
<div class="p-4 mt-5">
  <div class="card p-3 mt-5">

<h3>Form Pengembalian buku</h3>
<?php foreach ($query as $item) : ?>
<form action="{{ route('kembalikan-buku',$item->id) }}" method="post">
  @csrf
  @method('DELETE')
<div class="mt-3 d-flex flex-wrap gap-3">
 <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Id Peminjaman</label>
  <input type="number" class="form-control" placeholder="id peminjaman" name="id_peminjaman" id="id_peminjaman" value="{{ $item->id }}" readonly>
</div>
 <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Id Buku</label>
  <input type="text" class="form-control" placeholder="id peminjaman" name="id_buku" id="buku_id" value="{{ $item->buku_id }}" readonly>
</div>
 <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
  <input type="text" class="form-control" placeholder="Judul Buku" name="judulBuku" id="judul" value="{{ $item->buku->judul }}" readonly>
</div>
</div>

<div class="d-flex flex-wrap gap-3">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nisn Siswa</label>
  <input type="number" class="form-control" placeholder="Nisn Siswa" name="nisn" id="nisn" value="{{ $item->nisnSiswa->nisn }}" readonly>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Siswa</label>
  <input type="text" class="form-control" placeholder="Nama Siswa" name="nama" id="nama" value=" {{ $item->nisnSiswa->nama }}" readonly>
</div>
{{-- <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Id Admin Perpustakaan</label>
  <input type="number" class="form-control" placeholder="Id Admin" name="id_admin" id="id_admin" value="" readonly>
</div> --}}
</div>

<div class="d-flex flex-wrap gap-4">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tanggal Buku Dipinjam</label>
  <input type="date" class="form-control" name="tgl_peminjaman" id="tgl_peminjaman" value="{{ $item->tanggal_peminjaman }}" readonly>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tenggat Pengembalian Buku</label>
  <input type="date" class="form-control" name="tgl_pengembalian" id="tgl_pengembalian" value="{{ $item->tanggal_peminjaman }}"  oninput="hitungDenda()" readonly>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Hari Pengembalian Buku</label>
  <input type="date" class="form-control" name="buku_kembali" id="buku_kembali" value="<?php echo date('Y-m-d');?>" readonly oninput="hitungDenda()"> <!--readonly-->
</div>
</div>
<?php endforeach; ?> 

<div class="d-flex flex-wrap gap-4">
</div>
<a class="btn btn-danger" href="TransaksiPeminjaman.php"> Batal</a>
<button type="submit" class="btn btn-success" name="kembalikan">Kembalikan</button>
</form>
</div>
</div>
  @endsection
   