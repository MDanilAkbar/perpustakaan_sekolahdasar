<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Buku;


class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pem = Peminjaman::all(); //eloquent ORM
        return view('peminjaman.index',compact('nomor','pem'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ang = Anggota::all();
        $buk = Buku::all();
        return view('peminjaman.form',compact('ang','buk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pem = new Peminjaman;
        $pem->id_peminjaman = $request->id_peminjaman;
        $pem->tglpeminjaman = $request->tglpeminjaman;
        $pem->tglpengembalian = $request->tglpengembalian;
        $pem->anggotas_id = $request->no_kartu;
        $pem->bukus_id = $request->kode_buku;
        $pem->status = $request->status;
        $pem->save();

        return redirect('/peminjaman/');
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
        $pem = Peminjaman::find($id);
        $ang = Anggota::all();
        $buk = Buku::all();
        return view('peminjaman.edit',compact('pem','ang','buk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pem = Peminjaman::find($id);
        $pem->id_peminjaman = $request->id_peminjaman;
        $pem->tglpeminjaman = $request->tglpeminjaman;
        $pem->tglpengembalian = $request->tglpengembalian;
        $pem->anggotas_id = $request->no_kartu;
        $pem->bukus_id = $request->kode_buku;
        $pem->save();

        return redirect('/peminjaman/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pem = Peminjaman::find($id);
        $pem->delete();

        return redirect('/peminjaman/');
    }

    
}
