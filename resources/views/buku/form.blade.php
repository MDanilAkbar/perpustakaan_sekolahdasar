@extends('layouts.master')
@section('title','Form Data Buku')
@section('heading','Form Data Buku')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/buku/store/"  enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Buku</label>
                    <input type="text" name="kode_buku" class="form-control @error('kode_buku') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('kode_buku')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sampul Buku</label>
                    <input type="file" accept="image/*" name="sampul_buku" class="form-control @error('sampul_buku') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('sampul_buku')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('judul')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Penulis Buku</label>
                    <input type="text" name="penulis" class="form-control @error('penulis') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('penulis')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Penerbit Buku</label>
                    <input type="text" name="penerbit" class="form-control @error('penerbit') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('penerbit')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tahun Terbit Buku</label>
                    <input type="text" name="tahunterbit" class="form-control @error('tahunterbit') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('tahunterbit')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection