<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
		public function dashboard() {
			$balitacount = DB::table('balita')->count();
			$membercount = DB::table('member')->count();
			$bumilcount = DB::table('bumil')->count();

			return view('admin.dashboard')->with([
				'balitacount' => $balitacount,
				'membercount' => $membercount,
				'bumilcount' => $bumilcount,
			]);
		}
}
