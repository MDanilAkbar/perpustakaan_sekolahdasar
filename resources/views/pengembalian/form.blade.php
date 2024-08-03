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
                    <input type="date" name="tglpeminjaman" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" name="tglpengembalian" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">No Kartu</label>
                  <select name="no_kartu" class="form-control" id="">
                    <option value="">-Pilih No Kartu-</option>
                    @foreach ($ang as $item)
                        <option value="{{$item->id}}">{{$item->no_kartu}} - {{$item->anggota}}</option>
                    @endforeach

                </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Kode Buku</label>
                  <select name="kode_buku" class="form-control" id="">
                    <option value="">-Pilih Kode Buku-</option>
                    @foreach ($buk as $item2)
                        <option value="{{$item2->id}}">{{$item2->kode_buku}} - {{$item2->buku}}</option>
                    @endforeach 

                </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection