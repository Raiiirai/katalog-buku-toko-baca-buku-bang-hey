@extends('layouts.utama')

@section('judul', 'Kategori Buku')

@section('konten')

    <h2>Kategori Buku</h2>

    <p>Berikut adalah kategori buku yang tersedia di toko kami.</p>

    @foreach ($kategori as $item)

        <div class="kartu">
            <h3>{{ $item }}</h3>
        </div>

    @endforeach

@endsection