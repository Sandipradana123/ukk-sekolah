@extends('komponen.style')

@section('content')
{{-- <nav class="navbar fixed-top bg-body-tertiary shadow-sm">
    <div class="container-fluid p-3">
      <a class="navbar-brand" href="#">
        <img src="../../assets/logoNav.png" alt="logo" width="120px">
      </a>
      
      <a class="btn btn-tertiary" href="../dashboardMember.php">Dashboard</a>
    </div>
  </nav> --}}
  
<div class="p-4 mt-5">
  <h2 class="mt-5">Detail Buku</h2>
  <div class="d-flex justify-content-center">
  <div class="card" style="width: 18rem;">
<div class="card-body">
  <h5 class="card-title"><?= $detail->judul; ?></h5>
</div>
<ul class="list-group list-group-flush">
  <li class="list-group-item">Kategori : <?= $detail->kategoriBuku->nama_kategori; ?></li>
  <li class="list-group-item">Penulis : {{ $detail->penulis }} </li>
  <li class="list-group-item">Penerbit : {{ $detail->penerbit }}</li>
  <li class="list-group-item">Tahun terbit : {{ $detail->tahun_terbit }}</li>
</ul>
<div class="card-body">
  <a href="{{ route('dashboard-member.buku') }}" class="btn btn-danger">Batal</a>
  <a href="{{ route('dashboard-pinjam.buku',$detail->buku_id) }}" class="btn btn-success">Pinjam</a>
</div>

    
  </div>
 </div>
</div>

@endsection

