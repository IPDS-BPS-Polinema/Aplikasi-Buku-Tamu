<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidikan = Pendidikan::all();
        return view('Pendidikan.index', compact('pendidikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pendidikan = Pendidikan::all();
        return view('Pendidikan.formTambah', compact('pendidikan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendidikan = new Pendidikan();

        $pendidikan->jenis_pendidikan=$request->pendidikan;
        $pendidikan->save();

        return redirect()->route('pendidikan.index')->with('status', 'Data Jenis Pendidikan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pendidikan = Pendidikan::find($id);
        return view('Pendidikan.formDetail', compact('pendidikan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendidikan = Pendidikan::find($id);
        return view('Pendidikan.formEdit', compact('pendidikan'));
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
        $pendidikan = Pendidikan::find($id);
        $pendidikan->jenis_pendidikan=$request->pendidikan;
        $pendidikan->save();

        return redirect()->route('pendidikan.index')->with('status', 'Data Jenis Pendidikan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendidikan = Pendidikan::find($id);
        $pendidikan->delete();

        return redirect()->route('pendidikan.index')->with('status', 'Data Jenis Pendidikan Berhasil Dihapus');
  
    }
}
