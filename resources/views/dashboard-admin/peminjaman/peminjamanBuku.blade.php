
@extends('komponen.style')

@section('content')
    <div class="p-4 mt-5">
    <div class="mt-5">
    <caption>List of Peminjaman</caption>
      <div class="table-responsive mt-3">
        <table class="table table-striped table-hover">
        <thead class="text-center">
          <tr>
            <th class="bg-primary text-light">Id Peminjaman</th>
            <th class="bg-primary text-light">Id Buku</th>
            <th class="bg-primary text-light">Judul Buku</th>
            <th class="bg-primary text-light">Nisn Siswa</th>
            <th class="bg-primary text-light">Nama siswa</th>
            <th class="bg-primary text-light">Kelas</th>
            <th class="bg-primary text-light">Jurusan</th>
            <th class="bg-primary text-light">Id Admin</th>
            <th class="bg-primary text-light">Tanggal Peminjaman</th>
            <th class="bg-primary text-light">Tanggal Pengembalian</th>
          </tr>
        </thead>
       <?php foreach ($dataPeminjam as $item) : ?>
      <tr>
       <td><?= $item["id_peminjaman"]; ?></td>
      <td><?= $item["id_buku"]; ?></td>
      <td><?= $item["judul"]; ?></td>
      <td><?= $item["nisn"]; ?></td>
      <td><?= $item["nama"]; ?></td>
      <td><?= $item["kelas"]; ?></td>
      <td><?= $item["jurusan"]; ?></td>
      <td><?= $item["id_admin"]; ?></td>
      <td><?= $item["tgl_peminjaman"]; ?></td>
      <td><?= $item["tgl_pengembalian"]; ?></td>
      </tr>
      <?php endforeach;?>
    </table>
    </div>
    </div>
  </div>
  @endsection