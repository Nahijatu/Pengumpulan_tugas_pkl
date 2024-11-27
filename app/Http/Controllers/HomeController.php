<?php

namespace App\Http\Controllers;
use App\Models\Pengumpulan; 

use Illuminate\Http\Request;

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
         // Ambil semua data dari tabel pengumpulans
         $pengumpulans = Pengumpulan::all();

         // Kirim data ke view
         return view('home', compact('pengumpulans'));
    }
}
