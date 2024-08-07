@extends('layouts.master')
@section('title','Edit Data Buku')
@section('heading','Edit Data Buku')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/buku/{{$buk->id}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Buku</label>
                    <input type="text" name="kode_buku" value="{{$buk->kode_buku}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sampul Buku</label>
                    <input type="file" accept="image/*" name="sampul_buku" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                    <input type="text" name="judul" value="{{$buk->judul}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Penulis Buku</label>
                    <input type="text" name="penulis" value="{{$buk->penulis}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Penerbit Buku</label>
                    <input type="text" name="penerbit" value="{{$buk->penerbit}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tahun Terbit Buku</label>
                    <input type="text" name="tahunterbit" value="{{$buk->tahunterbit}}" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
        </div>
@endsection