<?php

namespace App\Http\Controllers;
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
    public function index()
    {
        $lowongankerjaa = DB::table('lowongankerja')->limit(4)->get();
        $pesanann = DB::table('pesanan')->limit(4)->get();

        $lowongankerja = DB::table('lowongankerja')->get();
        $pesanan = DB::table('pesanan')->get();
        $users = DB::table('users')->get();

        return view('home',['lowongankerja' =>$lowongankerja,   
                            'users' =>$users,
                            'pesanan' =>$pesanan],
                            
                            // VIEW BATASAN DI OVERVIEW
                            ['lowongankerjaa' =>$lowongankerjaa,
                            'pesanann' =>$pesanann
                            ]);
                            
    }
}
