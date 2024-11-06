@extends('komponen.style')

@section('content')
    <div class="p-4 mt-5">
      <div class="mt-5">
    <caption>Daftar semua ulasan buku</caption>
      <div class="table-responsive mt-3">
    <table class="table table-striped table-hover">
     <thead class="text-center">
      <tr>
        <th class="bg-primary text-light">Nama siswa</th>
        <th class="bg-primary text-light">Judul buku</th>
        <th class="bg-primary text-light">Ulasan</th>
        <th class="bg-primary text-light">Rating</th>
      </tr>
    </thead>
        @foreach ($ulasan as $item)
            <tr>
                <td>{{ $item->siswa->nama }}</td>
                <td>{{ $item->buku->judul }}</td>
                <td>{{ $item->ulasan }}</td>
                <td>{{ $item->rating }}</td>
            </tr>
        @endforeach
    </table>
  </div>
 </div>
</div>
@endsection