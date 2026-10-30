<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = [
            [
                'id' => 1,
                'judul' => 'Mamaku bukan mamak mu',
                'penulis' => 'Raihan De Vandler',
                'kategori' => 'Teknologi, Psikologi, Drama, Horror',
                'harga' => 651999,
                'deskripsi' => 'Kisah perjuangan seorang 3 orang anak yang mempertahankan sebuah negara yang berpegang pada prinsip mamak-nya.',
                'gambar' => 'mom.jpg'
            ],
            [
                'id' => 2,
                'judul' => 'Manusia Setengah Laptop',
                'penulis' => 'Herman Vin Diesel',
                'kategori' => 'Drama, Perang, Sejarah',
                'harga' => 12000,
                'deskripsi' => 'Menceritakan seorang mahasiswa yang terjerat pinjol lalu dibawa ke masa lalu oleh orang misterius untuk ikut perang di Perang Dunia Pertama',
                'gambar' => 'laptop.jpg'
            ],
            [
                'id' => 3,
                'judul' => 'Coughing Baby vs Hydrogen Bomb',
                'penulis' => 'Jihan Nur Lela',
                'kategori' => 'Perang, Drama, Netorare',
                'harga' => 654999,
                'deskripsi' => 'Coughing baby adalah seorang pejuang yang mempertahankan pulau Alcatras dari ancaman bombardir komunis Amerika Timur',
                'gambar' => 'whats-the-most-ridiculous-hydrogen-bomb-vs-coughing-baby-v0-hxq1xm3nt3bd1.jpg'
            ],
            [
                'id' => 4,
                'judul' => 'Milk vs Fire',
                'penulis' => 'Yohan',
                'kategori' => 'Komedi, Novel, Sci-fi',
                'harga' => 799000,
                'deskripsi' => 'Pembuktian seekor sapi yang bersikeras untuk membalaskan dendam orang tua nya.',
                'gambar' => 'milkvsfire.jpg'
            ],
            [
                'id' => 5,
                'judul' => 'WE ARE CHARLIE KIRK!!!',
                'penulis' => 'Hugo Handerson, Juned, Doan is not there',
                'kategori' => 'Sejarah',
                'harga' => 159999999,
                'deskripsi' => 'WE ARE CHARLIE KIRK, WE CARRY THE FLAME, WE FIGHT FOR THE GOSPEL',
                'gambar' => 'kingkirk.jpg'
            ]
        ];

        return view('buku.index', compact('buku'));
    
    }
    public function detail($id)
    {
        $buku = [
            [
                'id' => 1,
                'judul' => 'Mamaku bukan mamak mu',
                'penulis' => 'Raihan De Vandler',
                'kategori' => 'Teknologi, Psikologi, Drama, Horror',
                'harga' => 651999,
                'deskripsi' => 'Kisah perjuangan seorang 3 orang anak yang mempertahankan sebuah negara yang berpegang pada prinsip mamak-nya.',
                'gambar' => 'mom.jpg'
            ],
            [
                'id' => 2,
                'judul' => 'Manusia Setengah Laptop',
                'penulis' => 'Herman Vin Diesel',
                'kategori' => 'Drama, Perang, Sejarah',
                'harga' => 12000,
                'deskripsi' => 'Menceritakan seorang mahasiswa yang terjerat pinjol lalu dibawa ke masa lalu oleh orang misterius untuk ikut perang di Perang Dunia Pertama',
                'gambar' => 'laptop.jpg'
            ],
            [
                'id' => 3,
                'judul' => 'Coughing Baby vs Hydrogen Bomb',
                'penulis' => 'Jihan Nur Lela',
                'kategori' => 'Perang, Drama, Netorare',
                'harga' => 654999,
                'deskripsi' => 'Coughing baby adalah seorang pejuang yang mempertahankan pulau Alcatras dari ancaman bombardir komunis Amerika Timur',
                'gambar' => 'whats-the-most-ridiculous-hydrogen-bomb-vs-coughing-baby-v0-hxq1xm3nt3bd1.jpg'
            ],
            [
                'id' => 4,
                'judul' => 'Milk vs Fire',
                'penulis' => 'Yohan',
                'kategori' => 'Komedi, Novel, Sci-fi',
                'harga' => 799000,
                'deskripsi' => 'Pembuktian seekor sapi yang bersikeras untuk membalaskan dendam orang tua nya.',
                'gambar' => 'milkvsfire.jpg'
            ],
            [
                'id' => 5,
                'judul' => 'WE ARE CHARLIE KIRK!!!',
                'penulis' => 'Hugo Handerson, Juned, Doan is not there',
                'kategori' => 'Sejarah',
                'harga' => 159999999,
                'deskripsi' => 'WE ARE CHARLIE KIRK, WE CARRY THE FLAME, WE FIGHT FOR THE GOSPEL',
                'gambar' => 'kingkirk.jpg',
            ]
        ];

        $detailBuku = null;

        foreach ($buku as $item) {
            if ($item['id'] == $id) {
                $detailBuku = $item;
                break;
            }
        }

        if ($detailBuku == null) {
            abort(404);
        }

        return view('buku.detail', compact('detailBuku'));
    }
}
