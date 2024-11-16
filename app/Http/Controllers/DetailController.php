<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Chevalier Lab',
            'faculty' => 'FIT',
            'link' => 'https://chevalier.netlify.app',
            'description' => 'Chevalier Lab adalah laboratorium yang berada dibawah
            naungan program studi D3 Rpla
            di fakultas ilmu terapan, telkom university.
            chevalier lab merupakan wadah bagi para mahasiswa yang memiliki
            minat dan ketertarikan untuk belajar lebih dalam tentang
            teknologi informasi(IT).
            Lab ini menyediakan berbagai divisi yang dapat dipilih sesuai dengan minat mahasiswa, yang semuanya di rancang
            untuk meningkatkan kemampuan teknis dan kreatif mereka'
        ];
        return view('detail', compact('data'));
    }
}
