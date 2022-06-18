<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
use App\Models\Balita;
use App\Models\Bumil;
use App\Models\Keluarga;

use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $keluarga = DB::table('keluarga')
						->select('keluarga.*')
            ->where('keluarga.id_user', '=', Auth::user()->id)
						->get()->first();

			return view('user.index')->with("keluarga", $keluarga);
    }

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function balita()
    {	
      $keluarga = Keluarga::where('id_user', Auth::user()->id)->first();
      $balita = DB::table('balita')
						->join('bb_balita', 'balita.id_balita', '=', 'bb_balita.id_balita')
						->join('tb_balita', 'balita.id_balita', '=', 'tb_balita.id_balita')
						->join('keluarga', 'balita.id_keluarga', '=', 'keluarga.id_keluarga')
						->select('balita.*', 'bb_balita.*', 'tb_balita.*', 'keluarga.*')
            ->where('balita.id_keluarga', '=', $keluarga->id_keluarga)
						->get();

      return view('user.balita')->with("balita", $balita);
    }

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bumil()
    {
      $keluarga = Keluarga::where('id_user', Auth::user()->id)->first();
      $bumil = DB::table('bumil')
						->join('bb_bumil', 'bumil.id_bumil', '=', 'bb_bumil.id_bumil')
						->join('ll_bumil', 'bumil.id_bumil', '=', 'll_bumil.id_bumil')
						->join('keluarga', 'bumil.id_keluarga', '=', 'keluarga.id_keluarga')
						->select('bumil.*', 'bb_bumil.*', 'll_bumil.*', 'keluarga.*')
            ->where('bumil.id_keluarga', '=', $keluarga->id_keluarga)
						->get();

  return view('user.bumil')->with("bumil", $bumil);
}
}
