@extends('komponen.style')

@section('content')
<div class="p-4 mt-5">
    <div class="mt-5 alert alert-primary" role="alert">Riwayat transaksi Peminjaman Buku Anda - <span class="fw-bold text-capitalize">{{ session('member.nama') }}</span></div>
    
  <div class="table-responsive mt-3">
    <table class="table table-striped table-hover">
     <thead class="text-center">
      <tr>
        <th class="bg-primary text-light">Judul Buku</th>
        <th class="bg-primary text-light">Nisn</th>
        <th class="bg-primary text-light">Nama</th>
<<<<<<< HEAD
        <th class="bg-primary text-light">Nama Admin</th>
=======
>>>>>>> main
        <th class="bg-primary text-light">Tanggal Peminjaman</th>
        <th class="bg-primary text-light">Tanggal Pengembalian</th>
        <th class="bg-primary text-light">Aksi</th>
      </tr>
      </thead>
      
<<<<<<< HEAD
      <tr>
        @foreach ($dataPinjam as $item)
            <td>{{ $item->buku->judul }}</td>
            {{-- <td>{{ $item->nisn->nama }}</td> --}}
            <td>{{ $item->nama }}</td>
            <td>{{ $item->tanggal_peminjaman }}</td>
            <td>{{ $item->tanggal_pengembalian }}</td>
            <td>
                <a class="btn btn-success" href="pengembalianBuku.php?id=<?= $item["id_peminjaman"]; ?>"> Kembalikan</a>
              </td>
        @endforeach
      </tr>
=======
     
        @foreach ($dataPinjam as $item)
        <tr>
            <td>{{ $item->buku->judul }}</td>
            <td>{{ $item->nisn }}</td>
            <td>{{ $item->nisnSiswa->nama }}</td>
            <td>{{ $item->tanggal_peminjaman }}</td>
            <td>{{ $item->tanggal_pengembalian }}</td>
            <td>
                <a class="btn btn-success" href="{{ route('pengembalian-buku-form',$item->id) }}"> Kembalikan</a>
              </td>
            </tr>
        @endforeach
     
>>>>>>> main
    </table>
    </div>
  </div>
@endsection

