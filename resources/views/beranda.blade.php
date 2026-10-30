@extends('layouts.utama')

@section('judul', 'Beranda')

@section('konten')

    <h2>Met datang yeee... gua kaget lu bisa nemu website ini</h2>

    <p>
        ni website buat lu beli buku terus lu baca. 
        apa? respon nya gak ramah? ye dah, gak ramah emang.
    </p>

    <p>
        disini ada berbagai kategori buku, mulai dari pendidikan,
        teknologi, novel, sejarah, hingga pengembangan diri.
    </p>

    <h3>Jelajahi Koleksi Kami</h3>

    <p>
        Silakan dah kunjungi halaman daftar buku untuk melihat
        koleksi buku yang tersedia.
    </p>

    <a href="{{ url('/buku') }}" class="tombol">Lihat Daftar Buku</a>

@endsection