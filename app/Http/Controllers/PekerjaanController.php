<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerjaan;

class PekerjaanController extends Controller
{
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pekerjaan = Pekerjaan::all();
        return view('pekerjaan.index', compact('pekerjaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pekerjaan = Pekerjaan::all();
        return view('Pekerjaan.formTambah', compact('pekerjaan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pekerjaan = new Pekerjaan();

        $pekerjaan->jenis_pekerjaan=$request->jenis;
        $pekerjaan->save();

        return redirect()->route('pekerjaan.index')->with('status', 'Data Jenis Pekerjaan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pekerjaan = Pekerjaan::find($id);
        return view('Pekerjaan.formDetail', compact('pekerjaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pekerjaan = Pekerjaan::find($id);
        return view('Pekerjaan.formEdit', compact('pekerjaan'));
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
        $pekerjaan = Pekerjaan::find($id);
        $pekerjaan->jenis_pekerjaan=$request->jenis;
        $pekerjaan->save();

        return redirect()->route('pekerjaan.index')->with('status', 'Data Jenis Pekerjaan Berhasil Diupdate');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pekerjaan = Pekerjaan::find($id);
        $pekerjaan->delete();

        return redirect()->route('pekerjaan.index')->with('status', 'Data Jenis Pekerjaan Berhasil Dihapus'); 
    }
}
