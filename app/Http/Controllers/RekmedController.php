<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Rekmed;

use Illuminate\Http\Request;

class RekmedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index()
    {
        $nomor = 1;
        $rekmed = Rekmed::all();
        return view('rekmed.index', compact('rekmed','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasien = pasien::all();
        return view('rekmed.form',compact('pasien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rek = new Rekmed;

        $rek->no_rekmed = $request->no_rekmed;
        $rek->niks = $request->nik;
        $rek->tanggal_berobat = $request->tanggal_berobat;
        $rek->dianogsa = $request->dianogsa;
        $rek->kode_obat = $request->kode_obat;
        $rek->transaksi = $request->transaksi;
        $rek->save();

        return redirect('/rekmed');
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
        $rekmed = Rekmed::find($id);
        $pasien = Pasien::all();
        return view('rekmed.edit',compact('rekmed','pasien'));
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
        $rekmed = Rekmed::find($id);

        $rekmed->no_rekmed = $request->no_rekmed;
        $rekmed->nik = $request->nik;
        $rekmed->tanggal_berobat = $request->tanggal_berobat;
        $rekmed->dianogsa = $request->dianogsa;
        $rekmed->kode_obat = $request->kode_obat;
        $rekmed->transaksi = $request->transaksi;
        $rekmed->save();

        return redirect('/rekmed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rek = Rekmed::find($id);
        $rek->delete();

        return redirect('/rekmed');
    }
}
