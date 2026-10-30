<?php

namespace App\Http\Controllers;

class HalamanController extends Controller
{
    public function beranda()
    {
        return view('Beranda');
    }

    public function tentang()
    {
        return view('Tentang');
    }

    public function kategori()
    {
        $kategori = [
            'Pendidikan',
            'Teknologi',
            'Novel',
            'Sejarah',
            'Pengembangan Diri',    
            ];

            return view('Kategori', compact('kategori'));
    }
}
