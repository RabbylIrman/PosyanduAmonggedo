<?php

namespace App\Http\Controllers;

use App\Models\Bumil;
use App\Models\BbBumil;
use App\Models\LlBumil;
use App\Models\Keluarga;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BumilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$bumil = DB::table('bumil')
						->join('bb_bumil', 'bumil.id_bumil', '=', 'bb_bumil.id_bumil')
						->join('ll_bumil', 'bumil.id_bumil', '=', 'll_bumil.id_bumil')
						->join('keluarga', 'bumil.id_keluarga', '=', 'keluarga.id_keluarga')
						->select('bumil.*', 'bb_bumil.*', 'll_bumil.*', 'keluarga.*')
						->get();

      return view('admin.ibu_hamil.index')->with("bumil", $bumil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$keluarga = Keluarga::all();
		return view('admin.ibu_hamil.add', [
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
		$bumil = new Bumil();
		$bumil->umur_bumil = $request->umur_bumil;
		$bumil->anak_ke = $request->anak_ke;
		$bumil->usia_kandungan = $request->usia_kandungan;
		$bumil->tinggi_badan = $request->tinggi_badan;
		$bumil->berat_badan_sebelumnya = $request->berat_badan_sebelumnya;
		$bumil->data_tahun = $request->data_tahun;
		$bumil->id_keluarga = $request->id_keluarga;
		$bumil->save();

		$newBumil = DB::table('bumil')
						->select('bumil.*')
						->where('bumil.id_keluarga', '=', $request->id_keluarga)
						->where('bumil.anak_ke', '=', $request->anak_ke)
						->get()->first();

		$bbBumil = new BbBumil();
		$bbBumil->bb_januari = $request->bb_januari;
		$bbBumil->bb_februari = $request->bb_februari;
		$bbBumil->bb_maret = $request->bb_maret;
		$bbBumil->bb_april = $request->bb_april;
		$bbBumil->bb_mei = $request->bb_mei;
		$bbBumil->bb_juni = $request->bb_juni;
		$bbBumil->bb_juli = $request->bb_juli;
		$bbBumil->bb_agustus = $request->bb_agustus;
		$bbBumil->bb_september = $request->bb_september;
		$bbBumil->bb_oktober = $request->bb_oktober;
		$bbBumil->bb_november = $request->bb_november;
		$bbBumil->bb_desember = $request->bb_desember;
		$bbBumil->id_bumil = $newBumil->id_bumil;
		$bbBumil->save();

		$llBumil = new LlBumil();
		$llBumil->ll_januari = $request->ll_januari;
		$llBumil->ll_februari = $request->ll_februari;
		$llBumil->ll_maret = $request->ll_maret;
		$llBumil->ll_mei = $request->ll_mei;
		$llBumil->ll_juni = $request->ll_juni;
		$llBumil->ll_juli = $request->ll_juli;
		$llBumil->ll_agustus = $request->ll_agustus;
		$llBumil->ll_september = $request->ll_september;
		$llBumil->ll_oktober = $request->ll_oktober;
		$llBumil->ll_november = $request->ll_november;
		$llBumil->ll_desember = $request->ll_desember;
		$llBumil->id_bumil = $newBumil->id_bumil;
		$llBumil->save();

		return redirect('/home/bumil')->with('success', 'data berhasil disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$bumil = DB::table('bumil')
						->join('bb_bumil', 'bumil.id_bumil', '=', 'bb_bumil.id_bumil')
						->join('ll_bumil', 'bumil.id_bumil', '=', 'll_bumil.id_bumil')
						->join('keluarga', 'bumil.id_keluarga', '=', 'keluarga.id_keluarga')
						->select('bumil.*', 'bb_bumil.*', 'll_bumil.*', 'keluarga.*')
						->where('bumil.id_bumil', '=', $id)
						->get()->first();

			return view("admin.ibu_hamil.edit", [
				"bumil" => $bumil,
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
		$bumil = Bumil::where('id_bumil', $id)->first();
		$bumil->umur_bumil = $request->umur_bumil;
		$bumil->anak_ke = $request->anak_ke;
		$bumil->usia_kandungan = $request->usia_kandungan;
		$bumil->tinggi_badan = $request->tinggi_badan;
		$bumil->berat_badan_sebelumnya = $request->berat_badan_sebelumnya;
		$bumil->data_tahun = $request->data_tahun;
		$bumil->save();

		$bbBumil = BbBumil::where('id_bumil', $id)->first();
		$bbBumil->bb_januari = $request->bb_januari;
		$bbBumil->bb_februari = $request->bb_februari;
		$bbBumil->bb_maret = $request->bb_maret;
		$bbBumil->bb_april = $request->bb_april;
		$bbBumil->bb_mei = $request->bb_mei;
		$bbBumil->bb_juni = $request->bb_juni;
		$bbBumil->bb_juli = $request->bb_juli;
		$bbBumil->bb_agustus = $request->bb_agustus;
		$bbBumil->bb_september = $request->bb_september;
		$bbBumil->bb_oktober = $request->bb_oktober;
		$bbBumil->bb_november = $request->bb_november;
		$bbBumil->bb_desember = $request->bb_desember;
		$bbBumil->save();

		$llBumil = LlBumil::where('id_bumil', $id)->first();
		$llBumil->ll_januari = $request->ll_januari;
		$llBumil->ll_februari = $request->ll_februari;
		$llBumil->ll_maret = $request->ll_maret;
		$llBumil->ll_mei = $request->ll_mei;
		$llBumil->ll_juni = $request->ll_juni;
		$llBumil->ll_juli = $request->ll_juli;
		$llBumil->ll_agustus = $request->ll_agustus;
		$llBumil->ll_september = $request->ll_september;
		$llBumil->ll_oktober = $request->ll_oktober;
		$llBumil->ll_november = $request->ll_november;
		$llBumil->ll_desember = $request->ll_desember;
		$llBumil->save();

		return redirect('/home/bumil')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$bbBumil = BbBumil::where('id_bumil', $id)->first();
		$bbBumil->delete();

		$llBumil = LlBumil::where('id_bumil', $id)->first();
		$llBumil->delete();

		$bumil = Bumil::where('id_bumil', $id)->first();
  		$bumil->delete();

      return redirect('/home/bumil')->with('success', 'data berhasil dihapus');
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
