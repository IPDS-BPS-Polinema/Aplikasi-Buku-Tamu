<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SosialKependudukan;

class SosialKependudukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisSospen = SosialKependudukan::all();
        return view('Sosial_kependudukan.index', compact('jenisSospen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisSospen = SosialKependudukan::all();
        return view('Sosial_kependudukan.formTambah', compact('jenisSospen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenisSospen = new SosialKependudukan();

        $jenisSospen->jenis_sosialkependudukan=$request->jenis;
        $jenisSospen->save();

        return redirect()->route('Sospen.index')->with('status', 'Data Jenis Sosial dan Kependudukan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenisSospen = SosialKependudukan::find($id);
        return view('Sosial_kependudukan.formDetail', compact('jenisSospen'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenisSospen = SosialKependudukan::find($id);
        return view('Sosial_kependudukan.formEdit', compact('jenisSospen'));
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
        $jenisSospen = SosialKependudukan::find($id);
        $jenisSospen->jenis_sosialkependudukan=$request->jenis;
        $jenisSospen->save();

        return redirect()->route('Sospen.index')->with('status', 'Data Jenis Sosial dan Kependudukan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenisSospen = SosialKependudukan::find($id);
        $jenisSospen->delete();

        return redirect()->route('Sospen.index')->with('status', 'Data Jenis Sosial dan Kependudukan Berhasil Dihapus');
    }
}
