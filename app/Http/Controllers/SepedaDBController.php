<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SepedaDBController extends Controller
{
	public function index()
	{
        $sepeda = DB::table('sepeda')->paginate(10);

		return view('sepeda.index',['sepeda' => $sepeda]);

	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;


		$sepeda = DB::table('sepeda')
		->where('merksepeda','like',"%".$cari."%")
		->paginate();


		return view('sepeda.index',['sepeda' => $sepeda]);

	}

    	// method untuk menampilkan view form tambah sepeda
	public function tambah()
	{
		return view('sepeda.create');

	}

	// method untuk insert data ke table sepeda
	public function store(Request $request)
	{
		// insert data ke table sepeda
		DB::table('sepeda')->insert([
			'merksepeda' => $request->merksepeda,
			'stocksepeda' => $request->stocksepeda,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman sepeda
		return redirect('/sepeda');

	}


	public function edit($kodesepeda)
	{

		$sepeda = DB::table('sepeda')->where('kodesepeda',$kodesepeda)->get();
		return view('sepeda.edit',['sepeda' => $sepeda]);

	}

	public function update(Request $request)
	{

		DB::table('sepeda')->where('kodesepeda',$request->kodesepeda)->update([
			'merksepeda' => $request->merksepeda,
			'stocksepeda' => $request->stocksepeda,
			'tersedia' => $request->tersedia,
		]);

		return redirect('/sepeda');
	}

	public function hapus($kodesepeda)
	{

		DB::table('sepeda')->where('kodesepeda',$kodesepeda)->delete();


		return redirect('/sepeda');
	}
}
