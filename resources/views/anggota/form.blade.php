@extends('layouts.master')
@section('title','Form Data Anggota')
@section('heading','Form Data Anggota')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/anggota/store/" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No Kartu</label>
                    <input type="text" name="no_kartu" class="form-control @error('no_kartu') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('no_kartu')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Foto</label>
                    <input type="file" accept="image/*" name="foto" class="form-control @error('foto') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('foto')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                    <input type="text" name="tempatLahir" class="form-control @error('tempatLahir') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('tempatLahir')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggalLahir" class="form-control @error('tanggalLahir') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('tanggalLahir')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio1" value="Laki-Laki">
                        <label class="form-check-label" for="inlineRadio1">Laki Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio2" value="Perempuan">
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('alamat')
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