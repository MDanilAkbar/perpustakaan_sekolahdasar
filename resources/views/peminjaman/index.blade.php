@extends('layouts.master')
@section('title','Data Peminjaman')
@section('heading','Halaman Peminjaman')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Data Peminjaman</h6>
        </div>
        <div class="card-header">
            <h3 class="text-left">
                <a href="/peminjaman/form" class="btn btn-primary"><i class="fa fa-folder-plus"></i> Tambah Data</a>
            </h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Peminjaman</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>NO Kartu</th>
                            <th>Kode Buku</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($pem as $item)
                        <tr>
                            <td>{{$nomor++}}</td>
                            <td>{{$item->id_peminjaman}}</td>
                            <td>{{$item->tglpeminjaman}}</td>
                            <td>{{$item->tglpengembalian}}</td>
                            <td>{{$item->anggotas->no_kartu}}</td>
                            <td>{{$item->bukus->kode_buku}}</td>
                            <td>
                                <a href="/peminjaman/edit/{{$item->id}}" class="btn btn-info btn-sm"><i class="fa fa-pencil-alt"></i></a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus{{$item->id}}">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="hapus{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan!</h1>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Yakin Data Peminjaman ID {{$item->id_peminjaman}} di Hapus?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <form action="/peminjaman/{{$item->id}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection