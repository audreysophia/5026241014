<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SepedaDBController extends Controller
{
	public function index()
	{
        $sepeda = DB::table('sepeda')->paginate(10);

		return view('sepeda',['sepeda' => $sepeda]);

	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;


		$sepeda = DB::table('sepeda')
		->where('merksepeda','like',"%".$cari."%")
		->paginate();


		return view('sepeda',['sepeda' => $sepeda]);

	}

    	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
		return view('tambahsepeda');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('sepeda')->insert([
			'merksepeda' => $request->merksepeda,
			'stocksepeda' => $request->stocksepeda,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sepeda');

	}


	public function edit($kodesepeda)
	{

		$sepeda = DB::table('sepeda')->where('kodesepeda',$kodesepeda)->get();
		return view('editsepeda',['sepeda' => $sepeda]);

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
