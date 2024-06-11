<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hibah;

class HibahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $hib = Hibah::all(); //eloquent ORM
        return view('hibah.index',compact('nomor','hib'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hibah.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hib = new Hibah;
        $hib->no_hibah = $request->no_hibah;
        $hib->nama = $request->nama;
        $hib->judulbuku = $request->judulbuku;
        $hib->jumlahbuku = $request->jumlahbuku;
        $hib->save();

        return redirect('/hibah/');
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
        $hib = Hibah::find($id);
        return view('hibah.edit',compact('hib'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hib = Hibah::find($id);
        $hib->no_hibah = $request->no_hibah;
        $hib->nama = $request->nama;
        $hib->judulbuku = $request->judulbuku;
        $hib->jumlahbuku = $request->jumlahbuku;
        $hib->save();

        return redirect('/hibah/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hib = Hibah::find($id);
        $hib->delete();

        return redirect('/hibah/');
    }
}
