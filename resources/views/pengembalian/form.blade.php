@extends('layouts.master')
@section('title','Form Data Pengembalian')
@section('heading','Form Data Pengembalian')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/pengembalian/store/">
                @csrf

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID Pengembalian</label>
                    <input type="text" name="id_pengembalian" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                {{--<div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Peminjaman</label>
                    <input type="date" name="tglpeminjaman"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>--}}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" name="tglpengembalian" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                {{--<div class="mb-3">
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
                </div>--}}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Denda</label>
                    <input type="text" readonly name="denda" value="{{$denda}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">ID Peminjaman</label>
                  <select name="id_peminjaman" class="form-control" id="">
                    <option value="">-Pilih ID Peminjaman-</option>
                    @foreach ($pem as $item)
                        <option value="{{$item->id}}">{{$item->id_peminjaman}} - {{$item->peminjaman}}</option>
                    @endforeach

                </select>

                <label for="status" class="form-label">Status</label>
                <input type="text" id="status" class="form-control" name="status" value="Sudah Dikembalikan" readonly>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection