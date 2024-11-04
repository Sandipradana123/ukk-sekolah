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
        <th class="bg-primary text-light">Id Buku</th>
        <th class="bg-primary text-light">Judul Buku</th>
        <th class="bg-primary text-light">Kategori</th>
        <th class="bg-primary text-light">Nisn</th>
        <th class="bg-primary text-light">Nama Siswa</th>
        <th class="bg-primary text-light">Kelas</th>
        <th class="bg-primary text-light">Jurusan</th>
        <th class="bg-primary text-light">Nama Admin</th>
        <th class="bg-primary text-light">Tanggal Pengembalian</th>
        <th class="bg-primary text-light">Keterlambatan</th>
        <th class="bg-primary text-light">Denda</th>
        <th class="bg-primary text-light">Delete</th>
      </tr>
    </thead>
        <?php foreach ($dataPeminjam as $item) : ?>
      <tr>
        <td><?= $item["id_pengembalian"]; ?></td>
        <td><?= $item["id_buku"]; ?></td>
        <td><?= $item["judul"]; ?></td>
        <td><?= $item["kategori"]; ?></td>
        <td><?= $item["nisn"]; ?></td>
        <td><?= $item["nama"]; ?></td>
        <td><?= $item["kelas"]; ?></td>
        <td><?= $item["jurusan"]; ?></td>
        <td><?= $item["nama_admin"]; ?></td>
        <td><?= $item["buku_kembali"]; ?></td>
        <td><?= $item["keterlambatan"]; ?></td>
        <td><?= $item["denda"]; ?></td>
        <td>
          <div class="action">
           <a href="deletePengembalian.php?id=<?= $item["id_pengembalian"]; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ?');"><i class="fa-solid fa-trash"></i></a>
           </div>
          </td>
      </tr>
        <?php endforeach; ?>
    </table>
  </div>
 </div>
</div>
@endsection