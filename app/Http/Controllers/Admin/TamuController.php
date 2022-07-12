<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengunjung;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\MediaPelayanan;
use App\Models\SosialKependudukan;
use App\Models\EkonomiPerdagangan;
use App\Models\PertanianPertambangan;
use App\Models\JenisLayanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TamuController extends Controller
{
    public function index() {     
        $data = Pengunjung::all();
        $pekerjaan = Pekerjaan::all();
        $pendidikan = Pendidikan::all();
        $media = MediaPelayanan::all();
        $kebutuhan1 = SosialKependudukan::all();
        $kebutuhan2 = EkonomiPerdagangan::all();
        $kebutuhan3 = PertanianPertambangan::all();
        $jenis = JenisLayanan::all();
        return view('Admin.Tamu.index', compact('data','pekerjaan','pendidikan','media','kebutuhan1','kebutuhan2','kebutuhan3','jenis'));
    }

    public function formTambah() {
        $pekerjaan = Pekerjaan::all();
        return view('Admin.Tamu.formTambah', compact('pekerjaan'));
    }

    public function simpanData(Request $request){
        $pengunjung = new Pengunjung();

        $pengunjung->nama=$request->nama;
        $pengunjung->tlp=$request->telepon;
        $pengunjung->email=$request->email;
        $pengunjung->alamat=$request->alamat;
        $pengunjung->id_pekerjaan=$request->pekerjaan;
        
        $pengunjung->save();

        return redirect('admin/tamu')->with('status', 'Data Tamu Berhasil Disimpan');
    }

    public function formEdit($id){
        $data = Pengunjung::find($id);
        $pekerjaan = Pekerjaan::all();
        return view('Admin.Tamu.formEdit', compact('data','pekerjaan'));
    }

    public function updateTamu(Request $request,$id){
        $data=Pengunjung::with('jpekerjaan')->find($id);
        $data->nama=$request->nama;
        $data->tlp=$request->telepon;
        $data->alamat=$request->alamat;
        $data->email=$request->email;
        $data->id_pekerjaan=$request->pekerjaan;
        $data->save();

        return redirect('admin/tamu')->with('status', 'Data Tamu Berhasil Diupdate');
    }

    public function show($id)
    {
        $data = Pengunjung::find($id);
        return view('Admin.Tamu.formDetail', compact('data'));     
    }

    public function hapusTamu(Request $request){
        $id = $request->id;
        $data = Pengunjung::find($id);
        $data->delete();
        return redirect('admin/tamu')->with('status', 'Data Tamu Berhasil Dihapus');
    }

    public function register(Request $request){
        $user = new User();
        $user->nama=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();

        return redirect('/login');

    }
}