@extends('komponen.style')

@section('content')
  <div class="p-4 mt-5">
    <div class="mt-5 alert alert-primary" role="alert">Riwayat transaksi Denda Anda - <span class="fw-bold text-capitalize">{{ session('member.nama') }}</span></div>

  <div class="table-responsive mt-3">
    <table class="table table-striped table-hover">
      <thead class="text-center">
      <tr>
        <th class="bg-primary text-light">id buku</th>
        <th class="bg-primary text-light">Judul buku</th>
        <th class="bg-primary text-light">Nisn</th>
        <th class="bg-primary text-light">Nama siswa</th>
        <th class="bg-primary text-light">Nama admin</th>
        <th class="bg-primary text-light">Hari pengembalian</th>
        <th class="bg-primary text-light">Keterlambatan</th>
        <th class="bg-primary text-light">Denda</th>
        <th class="bg-primary text-light">Action</th>
      </tr>
      <thead class="text-center">
        @foreach ($dataDenda as $item)
        <tr>
            <td><?= $item["id_buku"]; ?></td>
            <td><?= $item["judul"]; ?></td>
            <td><?= $item["nisn"]; ?></td>
            <td><?= $item["nama"]; ?></td>
            <td><?= $item["nama_admin"]; ?></td>
            <td><?= $item["buku_kembali"]; ?></td>
            <td><?= $item["keterlambatan"]; ?></td>
            <td><?= $item["denda"]; ?></td>
            <td>
              <a class="btn btn-success" href="formBayarDenda.php?id=<?= $item["id_pengembalian"]; ?>">Bayar</a>
            </td>
          </tr>
        @endforeach
    </table>
    </div>
  </div>
  @endsection
