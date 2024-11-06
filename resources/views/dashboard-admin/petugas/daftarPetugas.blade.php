@extends('dashboard-admin.komponen-admin.style')

@section('content')
    <div class="p-4 mt-5">
      <div class="mt-5">
    <caption>Daftar semua petugas</caption>
      <div class="table-responsive mt-3">
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modal-tambah-petugas">
            Tambah
          </button>
    <table class="table table-striped table-hover">
     <thead class="text-center">
      <tr>
        <th class="bg-primary text-light">No</th>
        <th class="bg-primary text-light">Nama petugas</th>
      </tr>
    </thead>
        @foreach ($dataPetugas as $item)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">{{ $item->nama }}</td>
            </tr>
        @endforeach
    </table>
  </div>
 </div>
</div>

<!-- Modal tambah petugas-->
<div class="modal fade" id="modal-tambah-petugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">tambah petugas</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="admin-tambah-petugas-request" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="namaPetugas" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="namaPetugas" name="namaPetugas">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="text" class="form-control" id="password" name="password">
                </div>
             
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batal</button>
          <button type="submit" class="btn btn-primary">tambah</button>
        </div>
    </form>
      </div>
    </div>
  </div>
@endsection