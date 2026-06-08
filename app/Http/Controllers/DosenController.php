<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //

    public function index(){
    return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h1>";
}
    public function biodata(){
    $nama = "Audrey Sophia";
    $pelajaran = ["Algoritma & Pemrograman", "Kalkulus", "Pemrograman Web"];
    $ip = request()->ip(); // tambahkan ini
    return view('biodata', ['nama' => $nama, 'pelajaran' => $pelajaran, 'ip' => $ip]);
}
}
