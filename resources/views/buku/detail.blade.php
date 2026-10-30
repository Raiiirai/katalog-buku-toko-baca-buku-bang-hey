@extends('layouts.utama')

@section('judul', 'Detail Buku')

@section('konten')

    <h2>Detail Buku</h2>

    <div class="kartu">

        <h3>{{ $detailBuku['judul'] }}</h3>

        <p>
            <strong>Penulis:</strong>
            {{ $detailBuku['penulis'] }}
        </p>

        <p>
            <strong>Kategori:</strong>
            {{ $detailBuku['kategori'] }}
        </p>

        <p>
            <strong>Harga:</strong>
            Rp{{ number_format($detailBuku['harga'], 0, ',', '.') }}
        </p>

        <p>
            <strong>Deskripsi:</strong>
            {{ $detailBuku['deskripsi'] }}
        </p>

    </div>

    <a href="{{ url('/buku') }}" class="tombol">Kembali ke Daftar Buku</a>

@endsection