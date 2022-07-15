<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi = Transaksi::all();
        return view('Transaksi.formTambah' , compact('transaksi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi = new Transaksi();
        $transaksi->media=$request->media;
        $transaksi->pelayanan=$request->pelayanan;
        $transaksi->sarana=$request->sarana;
        $transaksi->kualitasdata=$request->kualitasdata;

        $transaksi->save();

        return redirect()->route('transaksi.index')->with('status', 'Data Transaksi Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi= Transaksi::find($id);
        return view('Transaksi.formDetail', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi= Transaksi::find($id);
        return view('Transaksi.formEdit', compact('transaksi'));
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
        $transaksi = Transaksi::find($id);
        $transaksi->media=$request->media;
        $transaksi->pelayanan=$request->pelayanan;
        $transaksi->sarana=$request->sarana;
        $transaksi->kualitasdata=$request->kualitasdata;

        $transaksi->save();

        return redirect()->route('transaksi.index')->with('status', 'Data Transaksi Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('status', 'Data Transaksi Berhasil Dihapus');
    }
}
