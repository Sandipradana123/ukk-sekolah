
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
     <title>Kelola buku || Admin</title>
  </head>
  <style>
    .layout-card-custom {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1.5rem;
    }
  </style>
  <body>
  <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('dashboard-admin') }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('dashboard-admin-ulasan') }}">Ulasan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-success" href="{{ route('admin.tambah-buku') }}">Tambah Buku</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="p-4 mt-4">
   
       
       <!--Card buku-->
       <div class="layout-card-custom mt-5">
        @foreach ($buku as $item)
        <div class="card" style="width: 15rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $item->judul }}</h5>
             </div>
             <ul class="list-group list-group-flush">
               <li class="list-group-item">Kategori : {{ $item->kategoriBuku->nama_kategori }}</li>
               <li class="list-group-item">Id Buku : {{ $item->buku_id }}</li>
             </ul>
           <div class="card-body">
             <a class="btn btn-success" href="{{ route('dashboard-form-edit-buku',$item->buku_id) }}" id="review">Edit</a>
             <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-hapus{{ $item->buku_id }}">
              Delete
            </button>
            
             </div>
           </div>

           <!-- Modal -->
<div class="modal fade" id="modal-hapus{{ $item->buku_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="{{ route('admin-hapus-buku',$item->buku_id) }}" method="POST">
      @csrf
      @method('DELETE')
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        apakah anda yakin ingin menghapus buku {{ $item->judul }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </form>
  </div>
</div>
        @endforeach
       </div>
      </div>
      <footer class="shadow-lg bg-subtle p-3">
        <div class="container-fluid d-flex justify-content-between">
        <p class="mt-2">Created by <span class="text-primary"> Sandi pradana</span> © 2024</p>
        </div>
        </footer>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
  </html>