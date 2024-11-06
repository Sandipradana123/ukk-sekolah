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
        <th class="bg-primary text-light">No</th>
        <th class="bg-primary text-light">Judul buku</th>
        <th class="bg-primary text-light">Nisn</th>
        <th class="bg-primary text-light">Tanggal buku kembali</th>
      </tr>
      </thead>
      @foreach ($dataPengembalian as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->buku->judul }}</td>
        <td>{{ $item->nisn }}</td>
        <td>{{ $item->buku_kembali }}</td>
      </tr>
      @endforeach
    </table>
    </div>
    </div>
    @endsection