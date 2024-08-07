<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Pengembalian;



class KembaliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $kem = Pengembalian::all(); //eloquent ORM
        return view('pengembalian.index',compact('nomor','kem'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    public function kembali(string $id)
    {
        $pem = Peminjaman::find($id);
        $ang = Anggota::all();
        $buk = Buku::all();
        $tgl_kembali = date_create('$tglpeminjaman');
        $tgl_hariini = now();
        if($tgl_hariini > $tgl_kembali){
            $denda = 5000;
        }else{
            $denda = 0;
        }
        return view('peminjaman.dikembalikan',compact('pem','ang','buk','tgl_kembali','denda'));
    }
}
