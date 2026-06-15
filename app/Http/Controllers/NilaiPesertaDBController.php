<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiPesertaDBController extends Controller
{
    public function index()
    {
        $nilai_peserta = DB::table('nilai_peserta')->get();

        return view('eas.index', [
            'nilai_peserta' => $nilai_peserta
        ]);
    }


    public function tambah()
    {
        return view('eas.create');
    }

    public function store(Request $request)
    {
        DB::table('nilai_peserta')->insert([
    'ID' => $request->ID,
    'nopeserta' => $request->nopeserta,
    'nilaiteori' => $request->nilaiteori,
    'nilaipraktek' => $request->nilaipraktek
]);

        return redirect('eas');
    }
}
