<?php

namespace App\Http\Controllers;

use App\Module;
use App\Berita;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $module = Module::all();
        $berita = DB::table('beritas')->take(6)->get();
        return view('home')->with('module',$module)->with('berita',$berita);
    }
}
