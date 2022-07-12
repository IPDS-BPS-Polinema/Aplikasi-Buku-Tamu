<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\MediaPelayanan;
use App\Models\SosialKependudukan;
use App\Models\EkonomiPerdagangan;
use App\Models\PertanianPertambangan;
use App\Models\JenisLayanan;

class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pekerjaan = Pekerjaan::all();
        $pendidikan = Pendidikan::all();
        $media = MediaPelayanan::all();
        $kebutuhan1 = SosialKependudukan::all();
        $kebutuhan2 = EkonomiPerdagangan::all();
        $kebutuhan3 = PertanianPertambangan::all();
        $jenis = JenisLayanan::all();
        return view('/index', compact('pekerjaan','pendidikan','media','kebutuhan1','kebutuhan2','kebutuhan3','jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengunjung = new Pengunjung();

        $pengunjung->nama=$request->nama;
        $pengunjung->tlp=$request->telepon;
        $pengunjung->jenis_kelamin=$request->jeniskelamin;
        $pengunjung->email=$request->email;
        $pengunjung->usia=$request->usia;
        $pengunjung->instansi=$request->instansi;
        $pengunjung->nipnim=$request->nipnim;
        $pengunjung->alamat=$request->alamat;
        $pengunjung->id_pekerjaan=$request->pekerjaan;
        $pengunjung->id_pendidikan=$request->pendidikan;
        $pengunjung->id_mediapelayanan=$request->media;
        $pengunjung->id_kebutuhan=$request->kebutuhan;
        $pengunjung->id_jenispelayanan=$request->jenispelayanan;
        $pengunjung->tujuan=$request->tujuan;
        $pengunjung->data=$request->data;
        
        $pengunjung->save();

        return redirect('/')->with('status', 'Data Tamu Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
