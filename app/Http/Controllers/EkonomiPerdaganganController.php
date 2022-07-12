<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EkonomiPerdagangan;

class EkonomiPerdaganganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisEkopangan = EkonomiPerdagangan::all();
        return view('Ekonomi_perdagangan.index', compact('jenisEkopangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisEkopangan = EkonomiPerdagangan::all();
        return view('Ekonomi_perdagangan.formTambah', compact('jenisEkopangan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenisEkopangan = new EkonomiPerdagangan();

        $jenisEkopangan->jenis_ekonomiperdagangan=$request->jenis;
        $jenisEkopangan->save();

        return redirect()->route('Ekopangan.index')->with('status', 'Data Jenis Ekonomi dan Perdagangan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenisEkopangan = EkonomiPerdagangan::find($id);
        return view('Ekonomi_perdagangan.formDetail', compact('jenisEkopangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenisEkopangan = EkonomiPerdagangan::find($id);
        return view('Ekonomi_perdagangan.formEdit', compact('jenisEkopangan'));
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
        $jenisEkopangan = EkonomiPerdagangan::find($id);
        $jenisEkopangan->jenis_ekonomiperdagangan=$request->jenis;
        $jenisEkopangan->save();

        return redirect()->route('Ekopangan.index')->with('status', 'Data Jenis Ekonomi dan Perdagangan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenisEkopangan = EkonomiPerdagangan::find($id);
        $jenisEkopangan->delete();

        return redirect()->route('Ekopangan.index')->with('status', 'Data Jenis Ekonomi dan Perdagangan Berhasil Dihapus');
    }
}
