<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5); /* Background gradient */
        }
        .container {
            background-color: white;
            padding: 20px; /* Kurangi padding */
            border-radius: 10px; /* Buat border-radius lebih halus */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Kurangi intensitas bayangan */
            width: 400px; /* Kurangi lebar kotak */
            text-align: center;
        }
        h1 {
            color: #333;
            font-size: 22px; /* Kurangi ukuran font untuk tampilan yang lebih halus */
            font-weight: 500; /* Buat font sedikit lebih ringan */
            margin-bottom: 15px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            font-weight: 600;
            margin-bottom: 5px;
            color: #333;
            font-size: 14px;
        }
        input, select {
            width: 100%;
            padding: 10px; /* Kurangi padding input */
            margin-bottom: 10px; /* Kurangi jarak antar elemen */
            border: 1px solid #ddd; /* Buat border lebih halus */
            border-radius: 5px; /* Buat border-radius lebih kecil */
            font-size: 14px; /* Kurangi ukuran font */
        }
        input:focus, select:focus {
            border-color: #28a745;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
            outline: none;
        }
        input:hover, select:hover {
            border-color: #999;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 500;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        button:hover {
            background-color: #218838;
            transform: scale(1.05);
        }
        button:active {
            transform: scale(1);
        }
        /* Responsive Design */
        @media (max-width: 500px) {
            .container {
                width: 90%;
                padding: 20px;
            }
            input, select, button {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>

@extends('layouts.app') 
@section('content') 
<div class="container">
    <h2>Create User</h2>

    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" placeholder="Nama" required>

        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm" placeholder="NPM" required>

        <label for="kelas_id">Kelas:</label>
        <select id="kelas_id" name="kelas_id" required>
            <option value="" disabled selected>Pilih Kelas</option>
            @foreach($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>

        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto"><br><br>

        <button type="submit">Submit</button>
    </form>
</div>
@endsection

</html>