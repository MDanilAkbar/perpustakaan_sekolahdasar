<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $ang = Anggota::all(); //eloquent ORM
        return view('anggota.index',compact('nomor','ang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ang = new Anggota;
        $ang->no_kartu = $request->no_kartu;
        $ang->nama = $request->nama;
        $ang->tempatLahir = $request->tempatLahir;
        $ang->tanggalLahir = $request->tanggalLahir;
        $ang->jenisKelamin = $request->jenisKelamin;
        $ang->alamat = $request->alamat;
        $ang->save();

        return redirect('/anggota/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ang = Anggota::find($id);
        return view('anggota.edit',compact('ang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ang = Anggota::find($id);
        $ang->no_kartu = $request->no_kartu;
        $ang->nama = $request->nama;
        $ang->tempatLahir = $request->tempatLahir;
        $ang->tanggalLahir = $request->tanggalLahir;
        $ang->jenisKelamin = $request->jenisKelamin;
        $ang->alamat = $request->alamat;
        $ang->save();

        return redirect('/anggota/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
