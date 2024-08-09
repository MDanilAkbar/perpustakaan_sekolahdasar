<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengembalian;
use App\Models\Peminjaman;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pen = Pengembalian::all(); //eloquent ORM
        return view('pengembalian.index',compact('nomor','pen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pem = Peminjaman::all();
        $tgl_kembali = date_create('$tglpeminjaman');
        $tgl_hariini = now();
        if($tgl_hariini > $tgl_kembali){
            $denda = 5000;
        }else{
            $denda = 0;
        }
        return view('pengembalian.form',compact('pem','denda'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pen = new Pengembalian;
        $pen->id_pengembalian = $request->id_pengembalian;
        $pen->tglpengembalian = $request->tglpengembalian;
        $pen->denda = $request->denda;
        $pen->peminjamans_id = $request->id_peminjaman;
        $pen->status = 'selesai';
        $pen->save();
/**
        $pem = Peminjaman::find($request->peminjamans_id);
        $pem->status = 'selesai';
        $pem->save();
*/
        return redirect('/pengembalian/');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pen = Pengembalian::find($id);
        $pen->delete();

        return redirect('/pengembalian/');
    }
}
