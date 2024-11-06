@extends('komponen.style')

@section('content')
    <div class="container mt-5">
        <div>
            <h1>Pendataan buku</h1>
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-tambah-barang">
            Tambah
          </button>
          
        <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun terbit</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($dataBarang as $itemBarang)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $itemBarang->judul }}</td>
                <td>{{ $itemBarang->penulis }}</td> 
                <td>{{ $itemBarang->penerbit }}</td>
                <td>{{ $itemBarang->tahun_terbit }}</td>
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
<form action="{{ route('admin.tambah-data-barang') }}" method="POST">
  @csrf
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah barang</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul">
              </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" name="penulis" id="penulis">
              </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" name="penerbit" id="penerbit">
              </div>
            <div class="mb-3">
                <label for="tahunTerbit" class="form-label">Tahun terbit</label>
                <input type="number" class="form-control" name="tahunTerbit" id="tahunTerbit">
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

