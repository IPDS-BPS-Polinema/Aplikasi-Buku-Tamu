<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;

class DashboardController extends Controller
{
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index(){
        $pengunjung = Pengunjung::count();
        $asn = Pengunjung::where('id_pekerjaan', '=', 1)->count();
        $mahasiswa= Pengunjung::where('id_pekerjaan', '=', 2)->count();
        $dosen = Pengunjung::where('id_pekerjaan', '=', 3)->count();
        return view('dashboard', compact('pengunjung','asn','mahasiswa','dosen'));
    }
}
