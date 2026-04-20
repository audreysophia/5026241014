<?php

namespace App\Http\Controllers;
//package kuliah.pert3

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
        return view('biodata', ['nama' => $nama, 'pelajaran' => $pelajaran]);
}
}
