
@extends('komponen.style')

@section('content')
    <div class="p-4 mt-5">
    <div class="mt-5">
    <caption>List of Peminjaman</caption>
      <div class="table-responsive mt-3">
        <table class="table table-striped table-hover">
        <thead class="text-center">
          <tr>
            <th class="bg-primary text-light">No</th>
            <th class="bg-primary text-light">Judul buku</th>
            <th class="bg-primary text-light">Nisn</th>
            <th class="bg-primary text-light">Nama</th>
            <th class="bg-primary text-light">Tanggal pinjam</th>
            <th class="bg-primary text-light">Tanggal kembali</th>
          </tr>
        </thead>
       @foreach ($dataPeminjam as $item)
           <tr>
            <td>{{ $loop->iteration }}</td> <!-- Nomor otomatis -->
            <td>{{ $item->buku->judul }}</td>
            <td>{{ $item->nisn }}</td>
            <td>{{ $item->nisnSiswa->nama }}</td>
            <td>{{ $item->tanggal_peminjaman }}</td>
            <td>{{ $item->tanggal_pengembalian }}</td>
           </tr>
       @endforeach
    </table>
    </div>
    </div>
  </div>
  @endsection