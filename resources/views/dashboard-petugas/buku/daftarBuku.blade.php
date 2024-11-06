
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
          <a class="nav-link active" aria-current="page" href="{{ route('dashboard-petugas') }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-success" href="{{ route('dashboard-petugas-tambahBuku') }}">Tambah Buku</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="p-4 mt-4">
     

       
       <!--Card buku-->
       <div class="mt-5">

       </div>
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
             <a class="btn btn-success" href="{{ route('dashboard-petugas-form-edit-buku',$item->buku_id) }}" id="review">Edit</a>
             <a class="btn btn-danger" href="deleteBuku.php?id=<?= $item["id_buku"]; ?>" onclick="return confirm('Yakin ingin menghapus data buku ? ');">Delete</a>
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