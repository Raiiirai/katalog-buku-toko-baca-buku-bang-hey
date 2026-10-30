<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('judul') - Toko baca buku bang</title>

        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                background-color: #f5f5f5;
                color:: #333;
            }

            header {
                background-color: #5b4636;
                color: white;
                padding: 20px;
                text-align: center;
            }

            nav {
                background-color: #3e3026;
                padding: 12px;
                text-align: center;
            }

            nav a {
                color: white;
                text-decoration: none;
                margin: 0 12px;
            }

            nav a:hover {
                text-decoration: underline;
            }

            main {
                max-width: 900px;
                margin: 25px auto;
                padding: 20px;
                background-color: white;
                min-height: 300px;
            }

            .kartu {
                border: 1px solid #ddd;
                padding: 15px;
                margin-bottom: 15px;
                border-radius: 5px;
            }

            .tombol {
                display: inline-block;
                background-color: #5b4636;
                color: white;
                padding: 8px 12px;
                text-decoration: none;
                border-radius: 4px;
        }

            .tombol:hover {
                background-color: #3e3026;
            }

            footer {
                background-color: #ddd;
                padding: 15px;
                text-align: center;
                margin-top: 25px;
            }
            .card-buku {
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 30px;

                padding: 20px;
                margin-bottom: 20px;

                background: #ffffff;
                border: 1px solid #dddddd;
                border-radius: 10px;

                transition: box-shadow 0.2s ease;
            }

            .card-buku:hover {
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            }

            .info-buku {
                flex: 1;
            }

            .info-buku h3 {
                margin-top: 0;
                font-size: 22px;
            }

            .cover-buku {
                flex-shrink: 0;
                width: 150px;
            }

            .cover-buku img {
                display: block;
                width: 100%;
                height: 210px;

                object-fit: cover;
                border-radius: 6px;

                box-shadow: 0 3px 8px rgba(0, 0, 0, 0.15);
            }

            .tombol-detail {
                display: inline-block;
                padding: 10px 16px;

                background: #654832;
                color: white;
                text-decoration: none;

                border-radius: 5px;
                transition: background 0.2s ease;
            }

            .tombol-detail:hover {
                background: #493323;
            }

            @media (max-width: 600px) {
                .card-buku {
                    gap: 15px;
                    padding: 14px;
                }

                .cover-buku {
                    width: 100px;
                }

                .cover-buku img {
                    height: 145px;
                }

                .info-buku h3 {
                    font-size: 18px;
                }
            }
        </style>
    </head>

    <body>
        <header>
            <h1>Toko buku baca bang</h1>
            <p>Nyari buku mahal? disini aja bang, dijamin abis uang lu</p>
        </header>

        <nav>
            <a href="{{ url('/') }}">Beranda</a>
            <a href="{{ url('/tentang') }}">Tentang Toko</a>
            <a href="{{ url('/buku') }}">Daftar Buku</a>
            <a href="{{ url('/kategori') }}">Kategori</a>
        </nav>
        
        <main>
            @yield('konten')
        </main>

        <footer>
            <p>&copy; 2026 Toko buku GUA, ini udah gua kopiret</p>
        </footer>

    </body>
</html>