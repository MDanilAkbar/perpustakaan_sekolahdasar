<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $buk = Buku::all(); //eloquent ORM
        return view('buku.index',compact('nomor','buk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $buk = new Buku;
        $buk->kode_buku = $request->kode_buku;
        $buk->judul = $request->judul;
        $buk->penulis = $request->penulis;
        $buk->penerbit = $request->penerbit;
        $buk->tahunterbit = $request->tahunterbit;
        $buk->sampul_buku = $request->sampul_buku->getClientOriginalName();
        $buk->save();

        $request->sampul_buku->move('foto_sampulbuku',$request->sampul_buku->getClientOriginalName());

        return redirect('/buku/');
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
        $buk = Buku::find($id);
        return view('buku.edit',compact('buk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $buk = Buku::find($id);
        $buk->kode_buku = $request->kode_buku;
        $buk->judul = $request->judul;
        $buk->penulis = $request->penulis;
        $buk->penerbit = $request->penerbit;
        $buk->tahunterbit = $request->tahunterbit;
        $buk->sampul_buku = $request->sampul_buku->getClientOriginalName();
        $buk->save();

        $request->sampul_buku->move('foto_sampulbuku',$request->sampul_buku->getClientOriginalName());

        return redirect('/buku/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buk = Buku::find($id);
        $buk->delete();

        return redirect('/buku/');
    }
}
