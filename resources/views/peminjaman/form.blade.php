@extends('layouts.master')
@section('title','Form Data Peminjaman')
@section('heading','Form Data Peminjaman')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/peminjaman/store/">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID Peminjaman</label>
                    <input type="text" name="id_peminjaman" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Peminjaman</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Pengembalian</label>
                    <input type="text" name="judulbuku" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">No Kartu</label>
                    <input type="text" name="jumlahbuku" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Kode Buku</label>
                    <input type="text" name="jumlahbuku" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection