@extends('layouts.utama')

@section('judul', 'Daftar Buku')

@section('konten')

    <h2>Daftar Buku</h2>

    <p>Berikut adalah daftar buku yang tersedia di toko kami.</p>

    @foreach ($buku as $item)

         <div class="card-buku">

        <div class="info-buku">
            <h3>{{ $item['judul'] }}</h3>

            <p>Penulis: {{ $item['penulis'] }}</p>

            <p>Kategori: {{ $item['kategori'] }}</p>

            <p>
                Harga: Rp{{ number_format($item['harga'], 0, ',', '.') }}
            </p>

            <a href="{{ url('/buku/' . $item['id']) }}" class="tombol-detail">
                Lihat Detail
            </a>
        </div>

        <div class="cover-buku">
            <img
                src="{{ asset('images/books/' . $item['gambar']) }}"
                alt="Cover {{ $item['judul'] }}"
            >
        </div>

    </div>

    @endforeach

@endsection