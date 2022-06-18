<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Users;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kader = DB::table('member')
            ->leftJoin('users', 'member.id_user', '=', 'users.id')
            ->select('member.*', 'users.*')
            ->get();

        return view('admin.members.index')->with("kader", $kader);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.members.add');
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
        $user->role = '1';
        $user->password = Hash::make($request->password);
        $user->save();

        $newUser = DB::table('users')
            ->select('users.*')
            ->where('users.name', '=', $request->name)
            ->where('users.email', '=', $request->email)
            ->get()->first();

        $kader = new Member();
        $kader->nama_kader = $request->nama_kader;
        $kader->alamat_kader = $request->alamat_kader;
        $kader->nomor_hp = $request->nomor_hp;
        $kader->id_user = $newUser->id;
        $kader->save();

        return redirect('/home/kader')->with('success', 'data berhasil disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id_kader = $id;
        $kader = DB::table('member')
            ->leftJoin('users', 'member.id_user', '=', 'users.id')
            ->select('member.*', 'users.*')
            ->where('member.id_user', '=', $id)
            ->get()->first();

        return view("admin.members.edit")->with([
            "kader" => $kader,
            "id_kader" => $id_kader
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

        $user = Users::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $kader = Member::where('id_user', $id)->first();
        $kader->nama_kader = $request->nama_kader;
        $kader->alamat_kader = $request->alamat_kader;
        $kader->nomor_hp = $request->nomor_hp;
        $kader->save();

        return redirect('/home/kader')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kader = Member::find($id);
        $kader->delete();
        $user = Users::where('id', $kader->id_user);
        $user->delete();

        return redirect('/home/kader')->with('success', 'data berhasil dihapus');
    }
}
