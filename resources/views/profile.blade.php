<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>

    <!-- Import Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Ganti font menjadi Poppins */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5; /* Warna background yang lembut */
        }
        .profile-container {
            text-align: center;
            background-color: #00272b; /* Warna kotak */
            padding: 50px;
            border-radius: 10px; /* Radius 10px untuk kotak */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan halus untuk efek kedalaman */
        }
        .Foto-Profil {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 2px solid #000;
            display: inline-block;
            background-color: #f0f0f0;
            margin-bottom: 20px;
        }
        .Info-Profil{
            width: 200px;
            margin: 0 auto;
        }
        .info-item {
            background-color: #e0ff4f; /* Warna hijau muda */
            margin: 10px 0;
            padding: 10px;
            border-radius: 10px; /* Radius sudut 10px */
            font-weight: 600; /* Bold dengan bobot 600 dari font Poppins */
            text-align: center;
            color: #333; /* Warna teks yang lebih gelap */
            font-size: 16px; /* Ukuran font yang sedikit lebih besar */
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="Foto-Profil"></div>
        <div class="Info-Profil">
            <div class="info-item"><?= $nama ?></div>
            <div class="info-item"><?= $kelas ?></div>
            <div class="info-item"><?= $npm ?></div>
        </div>
    </div>
</body>
</html>