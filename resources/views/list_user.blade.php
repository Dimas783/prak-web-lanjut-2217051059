@extends('layouts.app')

@section('content')
<style>
    /* Styling untuk mempercantik tampilan */
    body {
        background: linear-gradient(135deg, #74ebd5, #ACB6E5);
        min-height: 100vh;
        font-family: 'Poppins', sans-serif;
    }

    .page-title {
        font-size: 36px;
        font-weight: bold;
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    /* Tombol Tambah Pengguna Baru */
    .btn-add-user {
        background-color: #007bff; /* Biru */
        padding: 10px 20px;
        border-radius: 5px;
        color: white;
        font-weight: bold;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.3s ease;
        display: block;
        margin: 0 auto 20px; /* Rata tengah tombol */
        text-align: center;
    }

    .btn-add-user:hover {
        background-color: #0056b3; /* Biru lebih gelap saat hover */
        transform: translateY(-2px); /* Efek hover naik sedikit */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Bayangan saat hover */
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .card {
        width: 18rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-body h5 {
        font-weight: bold;
        font-size: 20px;
    }

    .card-text {
        font-size: 14px;
        color: #555;
    }

    .btn {
        width: 100%;
        margin-top: 10px;
    }
</style>

<div class="page-title">List Data</div>

<!-- Tombol Tambah Pengguna Baru -->
<a href="{{ route('users.create') }}" class="btn-add-user">Tambah Pengguna Baru</a>

<!-- Container untuk Card -->
<div class="card-container">
    @foreach($users as $user)
    <div class="card">
        <!-- Foto Pengguna -->
        <img src="{{ asset($user->foto ?? 'uploads/img/default.jpg') }}" class="card-img-top" alt="{{ $user->nama }}'s photo" style="height: 200px; object-fit: cover;">
        
        <!-- Body Card -->
        <div class="card-body">
            <h5 class="card-title">{{ $user->nama }}</h5>
            <p class="card-text">NPM: {{ $user->npm }}</p>
            <p class="card-text">Kelas: {{ $user->kelas->nama_kelas ?? 'Tidak Diketahui' }}</p>
            <p class="card-text">Jurusan: {{ $user->jurusan ?? 'Tidak Diketahui' }}</p>
            <p class="card-text">Semester: {{ $user->semester ?? '-' }}</p>
        </div>
    </div>
    @endforeach
</div>

@endsection
