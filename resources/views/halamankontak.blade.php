<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Internal CSS</title>
    <style>
        /* Gaya CSS internal dimulai di sini */

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9; /* Warna latar belakang halaman */
            color: #333; /* Warna teks umum */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Memastikan body mengisi seluruh tinggi viewport */
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px; /* Lebar maksimum formulir */
        }

        h1 {
            text-align: center;
            color: #4a90e2; /* Warna judul */
            margin-bottom: 25px;
        }

        .contact-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Memastikan padding dan border dihitung dalam lebar total */
        }

        .contact-form textarea {
            resize: vertical; /* Memungkinkan pengguna mengubah ukuran vertikal */
            height: 120px;
        }

        .contact-form button {
            background-color: #4a90e2;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #357ab8; /* Warna saat tombol dihover */
        }

        .contact-info {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            text-align: center;
        }

        .contact-info p {
            margin: 8px 0;
            line-height: 1.5;
        }
        
        /* Gaya CSS internal berakhir di sini */
    </style>
</head>
<body>
    <div class="container">
        <h1>Hubungi Kami 👋</h1>
        
        <form class="contact-form" action="#" method="POST">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="pesan">Pesan</label>
            <textarea id="pesan" name="pesan" required></textarea>
            
            <button type="submit">Kirim Pesan</button>
        </form>

        ---

        <div class="contact-info">
            <h2>Informasi Link Navigasi lain</h2>
                <a href="/Selamat-Datang">Halaman Utama</a> <br>
                <a href="/tentang-kami">Tentang Kami</a>
        </div>
    </div>
</body>
</html>