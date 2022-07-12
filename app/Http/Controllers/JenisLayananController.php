<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisLayanan;

class JenisLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisLayanan = JenisLayanan::all();
        return view('Jenis_layanan.index', compact('jenisLayanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisLayanan = JenisLayanan::all();
        return view('Jenis_layanan.formTambah', compact('jenisLayanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenisLayanan = new JenisLayanan();

        $jenisLayanan->jenis_layanan=$request->jenis;
        $jenisLayanan->save();

        return redirect()->route('jLayanan.index')->with('status', 'Data Jenis Layanan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenisLayanan = JenisLayanan::find($id);
        return view('Jenis_layanan.formDetail', compact('jenisLayanan'));     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenisLayanan = JenisLayanan::find($id);
        return view('Jenis_layanan.formEdit', compact('jenisLayanan'));
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
        $jenisLayanan = JenisLayanan::find($id);
        $jenisLayanan->jenis_layanan=$request->jenis;
        $jenisLayanan->save();

        return redirect()->route('jLayanan.index')->with('status', 'Data Jenis Layanan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenisLayanan = JenisLayanan::find($id);
        $jenisLayanan->delete();

        return redirect()->route('jLayanan.index')->with('status', 'Data Jenis Layanan Berhasil Dihapus');
    }
}
