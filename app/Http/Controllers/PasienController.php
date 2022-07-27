<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Rekmed;

use Illuminate\Http\Request;


class PasienController extends Controller
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
        // $this->authorize('create',pasien::class);
        $nomor = 1;
        $pasien = Pasien::all();
        return view('pasien.index',compact('nomor','pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create',Pasien::class);
        $pas = new Pasien;

        $pas->nik = $request->nik;
        $pas->nama = $request->nama;
        $pas->tanggal_lahir = $request->tanggal_lahir;
        $pas->alamat = $request->alamat;
        $pas->jenis = $request->jenis;
        $pas->jenis_kelamin = $request->jenis_kelamin;
        $pas->save();

        return redirect('/pasien');
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
        $pasien = Pasien::find($id);
        return view('pasien.edit',compact('pasien'));
        
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
        $pasien = Pasien::find($id);

        $pasien->nik = $request->nik;
        $pasien->nama = $request->nama;
        $pasien->tanggal_lahir = $request->tanggal_lahir;
        $pasien->alamat = $request->alamat;
        $pasien->jenis = $request->jenis;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->save();

        return redirect('/pasien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pas = Pasien::find($id);
        $pas->delete();

        return redirect('/pasien');
    }
}
