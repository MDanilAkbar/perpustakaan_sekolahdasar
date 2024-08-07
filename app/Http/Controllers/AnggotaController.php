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
        $this->validate($request,[
            'no_kartu' => 'required|unique:anggotas,no_kartu',
            'nama' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'alamat' => 'required',
            'foto' => 'required|image|max:10000',
        ],[
            'required' => ':attribute Tidak Boleh Kosong',
            'unique' => ':attribute Sudah Digunakan',
        ]);


        $ang = new Anggota;
        $ang->no_kartu = $request->no_kartu;
        $ang->nama = $request->nama;
        $ang->tempatLahir = $request->tempatLahir;
        $ang->tanggalLahir = $request->tanggalLahir;
        $ang->jenisKelamin = $request->jenisKelamin;
        $ang->alamat = $request->alamat;
        $ang->foto = $request->foto->getClientOriginalName();
        $ang->save();

        $request->foto->move('foto',$request->foto->getClientOriginalName());
 
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
        $ang->foto = $request->foto->getClientOriginalName();
        $ang->save();

        $request->foto->move('foto',$request->foto->getClientOriginalName());

        return redirect('/anggota/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ang = Anggota::find($id);
        $ang->delete();

        return redirect('/anggota/');
    }
}
