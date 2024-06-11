@extends('layouts.master')
@section('title','Form Data Buku')
@section('heading','Form Data Buku')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/buku/store/">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Buku</label>
                    <input type="text" name="kode_buku" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                    <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Penulis Buku</label>
                    <input type="text" name="penulis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Penerbit Buku</label>
                    <input type="text" name="penerbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tahun Terbit Buku</label>
                    <input type="text" name="tahunterbit" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection