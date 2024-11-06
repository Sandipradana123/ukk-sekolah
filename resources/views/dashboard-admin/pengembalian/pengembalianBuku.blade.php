@extends('komponen.style')

@section('content')
    <div class="p-4 mt-5">
      <div class="mt-5">
    <caption>List of pengembalian</caption>
      <div class="table-responsive mt-3">
    <table class="table table-striped table-hover">
     <thead class="text-center">
      <tr>
        <th class="bg-primary text-light">Id Pengembalian</th>
        <th class="bg-primary text-light">peminjam</th>
        <th class="bg-primary text-light">Judul Buku</th>
        <th class="bg-primary text-light">Nisn</th>
        <th class="bg-primary text-light">Tanggal buku kembali</th>
      </tr>
    </thead>
        <?php foreach ($dataPeminjam as $item) : ?>
      <tr>
        <td>{{ $item->id_pengembalian }}</td>
        <td>{{ $item->nisnSiswa->nama }}</td>
        <td>{{ $item->buku->judul }}</td>
        <td>{{ $item->nisn }}</td>
        <td>{{ $item->buku_kembali }}</td>
        
      </tr>
        <?php endforeach; ?>
    </table>
  </div>
 </div>
</div>
@endsection