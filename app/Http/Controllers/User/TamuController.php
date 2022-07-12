<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TamuController extends Controller
{

    public function formTamu() {
        $pekerjaan = Pekerjaan::all();
        return view('/index', compact('pekerjaan'));
    }

    public function simpanTamu(Request $request){
        $nama    = $request->nama;
        $telepon = $request->telepon;
        $email   = $request->email;
        $alamat  = $request->alamat;
        $pekerjaan  = $request->pekerjaan;

        $data = new User();
        $data->nama = $nama;
        $data->tlp = $telepon;
        $data->email = $email;
        $data->alamat = $alamat;
        $data->pekerjaan = $pekerjaan;
        $data->password = Hash::make('rahasia');
        $data->save();

        return redirect('/')->with('status', 'Data Tamu Berhasil Disimpan');

    }
}
