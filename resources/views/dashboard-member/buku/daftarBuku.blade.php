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
          </div>
        </div>
       <?php endforeach; ?>
      </div>
      
     </div>
     
     
@endsection

 
    
   