@extends('layouts.master')
@section('title','Pengembalian')
@section('heading','Pengembalian')

@section('content') 
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/peminjaman/{{$pem->id}}">
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID Peminjaman</label>
                    <input type="text" readonly name="id_peminjaman" value="{{$pem->id_peminjaman}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Peminjaman</label>
                    <input type="date" readonly name="tglpeminjaman" value="{{$pem->tglpeminjaman}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" name="tglpengembalian" value="{{$pem->tglpengembalian}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">No Kartu</label>
                    <select name="no_kartu" readonly class="form-control" id="">
                        <option disabled value="">-Pilih No Kartu-</option>
                        @foreach ($ang as $item)
                            <option value="{{$item->id}}">{{$item->no_kartu}} - {{$item->anggota}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Kode Buku</label>
                  <select name="kode_buku" readonly class="form-control" id="">
                    <option disabled value="">-Pilih Kode Buku-</option>
                    @foreach ($buk as $item2)
                        <option value="{{$item2->id}}">{{$item2->kode_buku}} - {{$item2->buku}}</option>
                    @endforeach 

                </select>
                </div>
                <button type="submit" class="btn btn-primary">Dikembalikan</button>
            </form>
        </div>
        </div>
@endsection

