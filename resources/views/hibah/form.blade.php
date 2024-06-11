@extends('layouts.master')
@section('title','Form Data Hibah')
@section('heading','Form Data Hibah')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/hibah/store/">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No Hibah</label>
                    <input type="text" name="no_hibah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Donatur</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                    <input type="text" name="judulbuku" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jumlah Buku</label>
                    <input type="text" name="jumlahbuku" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection