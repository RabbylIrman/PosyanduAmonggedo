<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\BbBalita;
use App\Models\TbBalita;
use App\Models\Keluarga;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$balita = DB::table('balita')
						->join('bb_balita', 'balita.id_balita', '=', 'bb_balita.id_balita')
						->join('tb_balita', 'balita.id_balita', '=', 'tb_balita.id_balita')
						->join('keluarga', 'balita.id_keluarga', '=', 'keluarga.id_keluarga')
						->select('balita.*', 'bb_balita.*', 'tb_balita.*', 'keluarga.*')
						->get();

      return view('admin.gizi_balita.index')->with("balita", $balita);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$keluarga = Keluarga::all();
		return view('admin.gizi_balita.add', [
			'keluarga' => $keluarga
		]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			$balita = new Balita();
			$balita->nama_balita = $request->nama_balita;
			$balita->jenis_kelamin_balita = $request->jenis_kelamin_balita;
			$balita->tanggal_lahir_balita = $request->tanggal_lahir_balita;
			$balita->umur_balita = $request->umur_balita;
			$balita->data_tahun = $request->data_tahun;
			$balita->id_keluarga = $request->id_keluarga;
			$balita->save();

			$newBalita = DB::table('balita')
							->select('balita.*')
							->where('balita.id_keluarga', '=', $request->id_keluarga)
							->where('balita.nama_balita', '=', $request->nama_balita)
							->get()->first();

			$bbBalita = new BbBalita();
			$bbBalita->bb_januari = $request->bb_januari;
			$bbBalita->bb_februari = $request->bb_februari;
			$bbBalita->bb_maret = $request->bb_maret;
			$bbBalita->bb_april = $request->bb_april;
			$bbBalita->bb_mei = $request->bb_mei;
			$bbBalita->bb_juni = $request->bb_juni;
			$bbBalita->bb_juli = $request->bb_juli;
			$bbBalita->bb_agustus = $request->bb_agustus;
			$bbBalita->bb_september = $request->bb_september;
			$bbBalita->bb_oktober = $request->bb_oktober;
			$bbBalita->bb_november = $request->bb_november;
			$bbBalita->bb_desember = $request->bb_desember;
			$bbBalita->id_balita = $newBalita->id_balita;

			$tbBalita = new TbBalita();
			$tbBalita->tb_januari = $request->tb_januari;
			$tbBalita->tb_februari = $request->tb_februari;
			$tbBalita->tb_maret = $request->tb_maret;
			$tbBalita->tb_mei = $request->tb_mei;
			$tbBalita->tb_juni = $request->tb_juni;
			$tbBalita->tb_juli = $request->tb_juli;
			$tbBalita->tb_agustus = $request->tb_agustus;
			$tbBalita->tb_september = $request->tb_september;
			$tbBalita->tb_oktober = $request->tb_oktober;
			$tbBalita->tb_november = $request->tb_november;
			$tbBalita->tb_desember = $request->tb_desember;
			$tbBalita->id_balita = $newBalita->id_balita;
			
			$bbBalita->save();
			$tbBalita->save();
		
			return redirect('/home/balita')->with('success', 'data berhasil disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$balita = DB::table('balita')
						->join('bb_balita', 'balita.id_balita', '=', 'bb_balita.id_balita')
						->join('tb_balita', 'balita.id_balita', '=', 'tb_balita.id_balita')
						->join('keluarga', 'balita.id_keluarga', '=', 'keluarga.id_keluarga')
						->select('balita.*', 'bb_balita.*', 'tb_balita.*', 'keluarga.*')
						->where('balita.id_balita', '=', $id)
						->get()->first();

		return view("admin.gizi_balita.edit", [
			"balita" => $balita,
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {		
			$balita = Balita::where('id_balita', $id)->first();
			$balita->nama_balita = $request->nama_balita;
			$balita->jenis_kelamin_balita = $request->jenis_kelamin_balita;
			$balita->tanggal_lahir_balita = $request->tanggal_lahir_balita;
			$balita->umur_balita = $request->umur_balita;
			$balita->data_tahun = $request->data_tahun;
			$balita->save();

			$bbBalita = BbBalita::where('id_balita', $id)->first();
			$bbBalita->bb_januari = $request->bb_januari;
			$bbBalita->bb_februari = $request->bb_februari;
			$bbBalita->bb_maret = $request->bb_maret;
			$bbBalita->bb_april = $request->bb_april;
			$bbBalita->bb_mei = $request->bb_mei;
			$bbBalita->bb_juni = $request->bb_juni;
			$bbBalita->bb_juli = $request->bb_juli;
			$bbBalita->bb_agustus = $request->bb_agustus;
			$bbBalita->bb_september = $request->bb_september;
			$bbBalita->bb_oktober = $request->bb_oktober;
			$bbBalita->bb_november = $request->bb_november;
			$bbBalita->bb_desember = $request->bb_desember;
			$bbBalita->save();

			$tbBalita = TbBalita::where('id_balita', $id)->first();
			$tbBalita->tb_januari = $request->tb_januari;
			$tbBalita->tb_februari = $request->tb_februari;
			$tbBalita->tb_maret = $request->tb_maret;
			$tbBalita->tb_mei = $request->tb_mei;
			$tbBalita->tb_juni = $request->tb_juni;
			$tbBalita->tb_juli = $request->tb_juli;
			$tbBalita->tb_agustus = $request->tb_agustus;
			$tbBalita->tb_september = $request->tb_september;
			$tbBalita->tb_oktober = $request->tb_oktober;
			$tbBalita->tb_november = $request->tb_november;
			$tbBalita->tb_desember = $request->tb_desember;
			$tbBalita->save();

			return redirect('/home/balita')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {		
		$bbBalita = BbBalita::where('id_balita', $id)->first();
		$bbBalita->delete();

		$tbBalita = TbBalita::where('id_balita', $id)->first();
		$tbBalita->delete();

		$balita = Balita::where('id_balita', $id)->first();
  		$balita->delete();

    	return redirect('/home/balita')->with('success', 'data berhasil dihapus');
    }

		public function print_books()
		{
			$books = DB::table('book')
									->leftJoin('category', 'book.id_kategori', '=', 'category.id_kategori')
									->select('book.*', 'category.*')
									->get();
			$dateNow = Carbon::now()->format('d M Y');
 
    	$pdf = PDF::loadView('admin.books.books_pdf',[
				'books' => $books,
				'dateNow' => $dateNow
			]);
    	return $pdf->stream('laporan-daftar-buku.pdf');
		}
}
