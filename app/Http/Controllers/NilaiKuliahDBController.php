<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahDBController extends Controller
{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->get();

        return view('nilaikuliah', [
            'nilaikuliah' => $nilaikuliah
        ]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $nilaikuliah = DB::table('nilaikuliah')
    ->where('NRP', 'like', "%" . $cari . "%")
    ->get();

        return view('nilaikuliah', [
            'nilaikuliah' => $nilaikuliah
        ]);
    }

    public function tambah()
    {
        return view('tambahnilaikuliah');
    }

    public function store(Request $request)
    {
        DB::table('nilaikuliah')->insert([
    'NRP' => $request->nrp,
    'NilaiAngka' => $request->nilaiangka,
    'SKS' => $request->sks
]);

        return redirect('/nilaikuliah');
    }
}
