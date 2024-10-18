<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5); /* Background gradient */
        }

        .profile-container {
            background-color: #0c3b2e; /* Background container hijau tua */
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); 
            width: 320px; /* Memperlebar sedikit agar proporsional */
            text-align: center;
            transition: transform 0.3s ease; /* Efek hover pada container */
        }

        .profile-container:hover {
            transform: scale(1.05); /* Sedikit pembesaran saat hover */
        }

        .profile-image img {
            border-radius: 50%; /* Membuat gambar berbentuk lingkaran */
            width: 150px;
            height: 150px;
            object-fit: cover; /* Membuat gambar tetap proporsional */
            border: 6px solid #e3fc03; /* Border warna kuning sama dengan kotak info */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .profile-image img:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
            transform: translateY(-5px); /* Efek hover naik sedikit */
        }

        .info-item {
            background-color: #e3fc03; /* Background kotak info kuning */
            color: black;
            margin: 10px 0;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            text-align: center;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .info-item:hover {
            background-color: #d9e800; /* Warna kuning lebih gelap saat hover */
        }

        h1 {
            color: #ffffff; /* Teks putih */
            margin-bottom: 20px;
            font-size: 24px;
        }

        span {
            font-weight: 600;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-image">
            <img src="{{ asset($user->foto ?? 'assets/img/default-foto.jpg') }}" alt="Profile Image">
        </div>

        <h1>{{ $user->nama }}</h1>

        <div class="profile-info">
            <div class="info-item">NPM: {{ $user->npm }}</div>
            <div class="info-item">Kelas: {{ $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan' }}</div>
        </div>
    </div>
</body>
</html>
