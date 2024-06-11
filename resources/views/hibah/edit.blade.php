@extends('layouts.master')
@section('title','Edit Data Buku')
@section('heading','Edit Data Buku')

@section('content') 
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/hibah/{{$hib->id}}">
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No Hibah</label>
                    <input type="text" name="no_hibah" value="{{$hib->no_hibah}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Donatur</label>
                    <input type="text" name="nama" value="{{$hib->nama}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                    <input type="text" name="judulbuku" value="{{$hib->judulbuku}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jumlah Buku</label>
                    <input type="text" name="jumlahbuku" value="{{$hib->jumlahbuku}}" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
        </div>
@endsection

