<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller{
    public function profile($nama = "", $kelas = "", $npm = ""){
        $data = [
            'nama' => 'Dimas Habib Rizki',
            'kelas' => 'D',
            'npm' => '2217051059'
        ];
        return view('profile', $data);
    }
}