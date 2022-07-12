<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MediaPelayanan;

class MediaPelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mediaLayanan = MediaPelayanan::all();
        return view('Media_pelayanan.index', compact('mediaLayanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mediaLayanan = MediaPelayanan::all();
        return view('Media_pelayanan.formTambah', compact('mediaLayanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mediaLayanan = new MediaPelayanan();

        $mediaLayanan->jenis_mediaPelayanan=$request->media;
        $mediaLayanan->save();

        return redirect()->route('mPelayanan.index')->with('status', 'Data Media Pelayanan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mediaLayanan = MediaPelayanan::find($id);
        return view('Media_pelayanan.formDetail', compact('mediaLayanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mediaLayanan = MediaPelayanan::find($id);
        return view('Media_pelayanan.formEdit', compact('mediaLayanan'));
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
        $mediaLayanan = MediaPelayanan::find($id);
        $mediaLayanan->jenis_mediaPelayanan=$request->mLayanan;
        $mediaLayanan->save();

        return redirect()->route('mPelayanan.index')->with('status', 'Data Media Pelayanan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mediaLayanan = MediaPelayanan::find($id);
        $mediaLayanan->delete();

        return redirect()->route('mPelayanan.index')->with('status', 'Data Media Pelayanan Berhasil Dihapus');
    }
}
