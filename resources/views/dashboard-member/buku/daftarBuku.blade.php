@extends('komponen.style')
@section('content')
<style>
    .layout-card-custom {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1.5rem;
    }
  </style>
  
    <nav class="navbar fixed-top bg-body-tertiary shadow-sm">
      <div class="container-fluid p-3">
        <a class="navbar-brand" href="#">
          <h6>PERPUSTAKAAN SMKN 1 MEJAYAN</h6>
        </a>
        <a class="btn btn-tertiary" href="../dashboardMember.php">Dashboard</a>
      </div>
    </nav>
    
     <div class="p-4 mt-5">
       <!--Btn filter data kategori buku-->
      <div class="d-flex gap-2 mt-5 justify-content-center">
      <form action="{{ route('buku.filter') }}" method="post">
        @csrf
        <div class="layout-card-custom">
         <button class="btn btn-primary" type="submit">Semua</button>
         <button type="submit" name="webDeveloper" class="btn btn-outline-primary">Web developer</button>
         <button type="submit" name="machineLearning" class="btn btn-outline-primary">Machine learning</button>
         <button type="submit" name="pemrogamanOop" class="btn btn-outline-primary">Cyber security</button>
         </div>
        </form>
       </div>
       
       <form action="" method="post" class="mt-5">
      </form>
      
      <!--Card buku-->
    <div class="layout-card-custom">
       <?php foreach ($buku as $item) : ?>
       <div class="card" style="width: 15rem;">
         <div class="card-body">
           <h5 class="card-title">{{ $item->judul }}</h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Kategori : {{ $item->kategoriBuku->nama_kategori }}</li>
          </ul>
        <div class="card-body">
          <a class="btn btn-success" href="{{ route('dashboard-detail.buku',$item->buku_id) }}">Detail</a>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-ulasan{{ $item->buku_id }}">
            ulasan
          </button>
          </div>
        </div>

        <!-- Modal ulasan -->
<div class="modal fade" id="modal-ulasan{{ $item->buku_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ulasan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('member-ulasan') }}">
          @csrf
          <input type="text" name="bukuId" value="{{ $item->buku_id }}" hidden>
         <input type="text" name="userId" value="{{ session('member.nisn') }}" hidden>
          <div class="mb-3">
            <label for="ulasan" class="form-label">Ulasan anda tentang buku ini</label>
            <textarea class="form-control" id="ulasan" name="ulasan" rows="3"></textarea>
        </div>        
          <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <select class="form-select" name="rating" id="rating">
              <option value="rating 1">rating 1</option>
              <option value="rating 2">rating 2</option>
              <option value="rating 3">rating 3</option>
              <option value="rating 4">rating 4</option>
              <option value="rating 5">rating 5</option>
            </select>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </div>
    </form>
    </div>
  </div>
</div>
       <?php endforeach; ?>
      </div>
     </div>
@endsection

 
    
   