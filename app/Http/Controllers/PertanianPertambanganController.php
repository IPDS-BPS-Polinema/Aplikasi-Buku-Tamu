<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanianPertambangan;

class PertanianPertambanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisPertama = PertanianPertambangan::all();
        return view('Pertanian_pertambangan.index', compact('jenisPertama'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisPertama = PertanianPertambangan::all();
        return view('Pertanian_pertambangan.formTambah', compact('jenisPertama'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenisPertama = new PertanianPertambangan();

        $jenisPertama->jenis_pertanianpertambangan=$request->jenis;
        $jenisPertama->save();

        return redirect()->route('Pertama.index')->with('status', 'Data Jenis Pertanian dan Pertambangan Berhasil Disimpan');
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
        $jenisPertama = PertanianPertambangan::find($id);
        return view('Pertanian_pertambangan.formEdit', compact('jenisPertama'));
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
        $jenisPertama = PertanianPertambangan::find($id);
        $jenisPertama->jenis_pertanianpertambangan=$request->jenis;
        $jenisPertama->save();

        return redirect()->route('Pertama.index')->with('status', 'Data Jenis Pertanian dan Pertambangan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenisPertama = PertanianPertambangan::find($id);
        $jenisPertama->delete();

        return redirect()->route('Pertama.index')->with('status', 'Data Jenis Pertanian dan Pertambangan Berhasil Dihapus');
    }
}
