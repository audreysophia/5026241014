<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

        return view('keranjangbelanja.index', [
            'keranjangbelanja' => $keranjangbelanja
        ]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $keranjangbelanja = DB::table('keranjangbelanja')
    ->where('kodebarang', 'like', "%" . $cari . "%")
    ->get();

        return view('keranjangbelanja.index', [
            'keranjangbelanja' => $keranjangbelanja
        ]);
    }

    public function tambah()
    {
        return view('keranjangbelanja.create');
    }

    public function hapus($kodebarang)
	{

		DB::table('keranjangbelanja')->where('kodebarang',$kodebarang)->delete();


		return redirect('/keranjangbelanja');
	}

    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
    'kodebarang' => $request->kodebarang,
    'jumlah' => $request->jumlah,
    'harga' => $request->harga
]);

        return redirect('/keranjangbelanja');
    }
}
