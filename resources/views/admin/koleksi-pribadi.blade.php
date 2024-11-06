@extends('komponen.style')

@section('content')
    <div class="container mt-5">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-tambah-barang">
            Tambah
          </button>
          
        <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Nama lengkap</th>
                <th>Alamat</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($koleksi as $itemKoleksi)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $itemKoleksi->username }}</td>
                <td>{{ $itemKoleksi->password }}</td> 
                <td>{{ $itemKoleksi->email }}</td>
                <td>{{ $itemKoleksi->nama_lengkap }}</td>
                <td>{{ $itemKoleksi->alamat }}</td>
                <td>
                  <button>edit</button>
                  <button>hapus</button>
                </td>
              </tr>
              @endforeach
              

            </tbody>
          </table>
    </div>
    {{-- modal tambah barang --}}
<div class="modal fade" id="modal-tambah-barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
{{-- <form action="{{ route('tambah-produk') }}" method="POST"> --}}
  @csrf
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah barang</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="namaBarang" class="form-label">Nama barang</label>
                <input type="text" class="form-control" name="namaBarang" id="namaBarang">
              </div>
            <div class="mb-3">
                <label for="Harga" class="form-label">Harga</label>
                <input type="number" class="form-control" name="harga" id="Harga">
              </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" name="stok" id="stok">
              </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</form>
  </div>
  {{-- akhir modal tambah barang --}}
@endsection

