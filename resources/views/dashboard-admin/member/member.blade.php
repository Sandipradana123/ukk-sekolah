@extends('komponen.style')

@section('content')
    <div class="p-4 mt-5">
      <!--search engine --->
     <form action="" method="post" class="mt-5">
       <div class="input-group d-flex justify-content-end mb-3">
         <input class="border p-2 rounded rounded-end-0 bg-tertiary" type="text" name="keyword" id="keyword" placeholder="cari data member...">
         <button class="border border-start-0 bg-light rounded rounded-start-0" type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
       </div>
      </form>
      
      <caption>List of Member</caption>
      <div class="table-responsive mt-3">
        <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#modalTambah">
          <i class="fas fa-trash">tambah</i>
        </button>
        <table class="table table-striped table-hover">
        <thead class="text-center">
          <tr>
            <th class="bg-primary text-light">Nisn</th>
            <th class="bg-primary text-light">Kode</th>
            <th class="bg-primary text-light">Nama</th>
            <th class="bg-primary text-light">Jenis Kelamin</th>
            <th class="bg-primary text-light">Kelas</th>
            <th class="bg-primary text-light">Jurusan</th>
            <th class="bg-primary text-light">No Telepon</th>
            <th class="bg-primary text-light">Pendaftaran</th>
            <th class="bg-primary text-light">Delete</th>
          </tr>
        </thead>
        @foreach ($member as $item)
        <tr>
            <td>{{ $item->nisn }}</td>
            <td>{{ $item->kode_member }}</td>
            <td>{{ $item->nama}}</td>
            <td>{{ $item->jenis_kelamin }}</td>
            <td>{{ $item->kelas }}</td>
            <td>{{ $item->jurusan }}</td>
            <td>{{ $item->no_tlp }}</td>
            <td>{{ $item->tgl_pendaftaran }}</td>
            <td>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus{{ $item->nisn }}">
                <i class="fas fa-trash">hapus</i>
              </button>
              </td>
        </tr>         

        <!-- Modal hapus -->
<div class="modal fade" id="modalHapus{{ $item->nisn }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        apakah yakin ingin menghapus akun member dari {{ $item->nama }} ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Yakin</button>
      </div>
    </div>
  </div>
</div>
        @endforeach 
        
        
        <!-- Modal tambah member -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('admin-tambah-member') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="mb-3">
            <label for="nisn" class="form-label">Nisn</label>
            <input type="number" class="form-control" id="nisn" name="nisn">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password">
          </div>
          <div class="mb-3">
            <label for="kode" class="form-label">Kode</label>
            <input type="text" class="form-control" id="kode" name="kode">
          </div>
          <div class="mb-3">
            <label for="jenisKelamin" class="form-label">jenisKelamin</label>
            <select class="form-select" name="jenisKelamin" id="jenisKelamin">
              <option value="laki-laki">Laki-laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas">
          </div>
          <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan">
          </div>
          <div class="mb-3">
            <label for="noTlp" class="form-label">No telepon</label>
            <input type="text" class="form-control" id="noTlp" name="noTlp">
          </div>
          <div class="mb-3">
            <label for="tanggalDaftar" class="form-label">Tanggal daftar</label>
            <input type="date" class="form-control" id="tanggalDaftar" name="tanggalDaftar">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Yakin</button>
      </div>
    </form>
    </div>
  </div>
</div>


    </table>
    </div>
  </div>

  
  @endsection
   