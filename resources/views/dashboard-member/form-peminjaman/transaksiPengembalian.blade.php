@extends('komponen.style')

@section('content')  
    <div class="p-4 mt-5">
      <div class="mt-5 alert alert-primary" role="alert">Riwayat transaksi Pengembalian Buku Anda - <span class="fw-bold text-capitalize">{{ session('member.nama') }}</span></div>
    <!--search engine 
     <form action="" method="post">
       <div class="searchEngine">
         <input type="text" name="keyword" id="keyword" placeholder="cari judul atau id buku...">
         <button type="submit" name="search">Search</button>
       </div>
      </form> -->
      
    <div class="table-responsive mt-3">
    <table class="table table-striped table-hover">
      <thead class="text-center">
      <tr>
        <th class="bg-primary text-light">Id Pengembalian</th>
        <th class="bg-primary text-light">Id Buku</th>
        <th class="bg-primary text-light">Judul Buku</th>
        <th class="bg-primary text-light">Kategori</th>
        <th class="bg-primary text-light">Nisn</th>
        <th class="bg-primary text-light">Nama</th>
        <th class="bg-primary text-light">Nama Admin</th>
        <th class="bg-primary text-light">Tanggal Pengembalian</th>
        <th class="bg-primary text-light">Keterlambatan</th>
        <th class="bg-primary text-light">Denda</th>
      </tr>
      </thead>
      @foreach ($dataPengembalian as $item)
      <tr>
        <td>{{ $item->judul }}</td>
        <td>{{ $item->kategori }}</td>
        <td>{{ $item->nisn }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->buku_kembali }}</td>
        <td>{{ $item->keterlambatan }}</td>
        <td>{{ $item->denda }}</td>
      </tr>
      @endforeach
    </table>
    </div>
    </div>
    @endsection