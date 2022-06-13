<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use App\Models\Users;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$keluarga = DB::table('keluarga')
                              ->leftJoin('users', 'keluarga.id_user', '=', 'users.id')
                              ->select('keluarga.*', 'users.*')
                              ->get();
                              
      return view('admin.keluarga.index')->with("keluarga", $keluarga);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.keluarga.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user = new Users();
			$user->name = $request->name;
			$user->email = $request->email;
			$user->role = '2';
			$user->password = Hash::make($request->password);      
			$user->save();
                        
      $newUser = DB::table('users')
                              ->select('users.*')
                              ->where('users.name', '=', $request->name)
                              ->where('users.email', '=', $request->email)
                              ->get()->first();

			$keluarga = new Keluarga(); 
      $keluarga->no_kk = $request->no_kk;
			$keluarga->nik_ayah = $request->nik_ayah;
			$keluarga->nama_ayah = $request->nama_ayah;
			$keluarga->tanggal_lahir_ayah = $request->tanggal_lahir_ayah;
			$keluarga->nik_ibu = $request->nik_ibu;
			$keluarga->nama_ibu = $request->nama_ibu;
			$keluarga->tanggal_lahir_ibu = $request->tanggal_lahir_ibu;
			$keluarga->alamat = $request->alamat;
			$keluarga->id_user = $newUser->id;
			$keluarga->save();
		
			return redirect('/home/keluarga')->with('success', 'data berhasil disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $keluarga = DB::table('keluarga')
                              ->leftJoin('users', 'keluarga.id_user', '=', 'users.id')
                              ->select('keluarga.*', 'users.*')
                              ->where('keluarga.id_keluarga', '=', $id)
                              ->get()->first();

			return view("admin.keluarga.edit")->with("keluarga", $keluarga);
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
      $user = Users::where('id', $id)->first(); 

			$user->name = $request->name;
			$user->email = $request->email;
			$user->role = '2'; 
			$user->save();
                        
			$keluarga = Keluarga::where('id_user', $id)->first(); 
      $keluarga->no_kk = $request->no_kk;
			$keluarga->nik_ayah = $request->nik_ayah;
			$keluarga->nama_ayah = $request->nama_ayah;
			$keluarga->tanggal_lahir_ayah = $request->tanggal_lahir_ayah;
			$keluarga->nik_ibu = $request->nik_ibu;
			$keluarga->nama_ibu = $request->nama_ibu;
			$keluarga->tanggal_lahir_ibu = $request->tanggal_lahir_ibu;
			$keluarga->alamat = $request->alamat;
			$keluarga->save();
		
			return redirect('/home/keluarga')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $keluarga = Keluarga::find($id);
  		$keluarga->delete();
			$user = Users::where('id', $keluarga->id_user);
  		$user->delete();

      return redirect('/home/keluarga')->with('success', 'data berhasil dihapus');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function password($id)
    {
			$user = User::find($id);
			return view('keluarga.profile.edit', [
				'user' => $user
			]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function passwordUpdate(UpdatePasswordRequest $request)
    {
			$request->user()->update([
                'password' => Hash::make($request->get('password'))
			]);

			return redirect('/home/keluarga');
    }
}
