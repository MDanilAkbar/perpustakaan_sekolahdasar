@extends('layouts.master')
@section('title','Buku')
@section('heading','Halaman Buku')

@section('content')
                <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">                           
                            <a href="/buku/form" class="btn btn-primary"><i class="fa fa-folder-plus"></i> Tambah Data</a>
                        </h3>

                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                    </div>
                        <div class="card-body">
                                <table class="table table-bordered table-striped" id="example1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Buku</th>
                                            <th>Sampul Buku</th>
                                            <th>Judul Buku</th>
                                            {{--<th>Penulis Buku</th>
                                            <th>Penerbit Buku</th>
                                            <th>Tahun Terbit Buku</th>--}} 
                                            <th>Aksi</th>                                          
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($buk as $item2)
                                        <tr>
                                        <td>{{$nomor++}}</td>
                                        <td>{{$item2->kode_buku}}</td>
                                        <td><img src="{{asset('foto_sampulbuku/'.$item2->sampul_buku)}}" height="50"></td>
                                        <td>{{$item2->judul}}</td>
                                        {{--<td>{{$item2->penulis}}</td>
                                        <td>{{$item2->penerbit}}</td>
                                        <td>{{$item2->tahunterbit}}</td> --}}
                                            <td>

                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#detail{{$item2->id}}">Detail</i>
                                            </button>

                                            <!-- Modal Detail-->
                                            <div class="modal fade" id="detail{{$item2->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail {{$item2->nama}}</h1>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <table class="table">

                                        <tbody>
                                        
                                            <tr>
                                                <td>Kode Buku</td>
                                                <th scope="row">{{$item2->kode_buku}}</th>
                                            </tr>
                                            <tr>
                                                <td>Sampul Buku</td>
                                                <th scope="row"><img src="{{ asset('/foto_sampulbuku/'.$item2->sampul_buku) }}" width="100" alt=""></th>
                                            </tr>
                                            <tr>
                                                <td>Judul Buku</td>
                                                <th scope="row">{{$item2->judul}}</th>
                                            </tr>
                                            <tr>
                                                <td>Penulis Buku</td>
                                                <th scope="row">{{$item2->penulis}}</th>
                                            </tr>
                                            <tr>
                                                <td>Penerbit Buku</td>
                                                <th scope="row">{{$item2->penerbit}}</th>
                                            </tr>
                                            <tr>
                                                <td>Tahun Terbit Buku</td>
                                                <th scope="row">{{$item2->tahunterbit}}</th>
                                            </tr>
                                        </tbody>
                                        </table>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>

                                        </div>
                                        </div>
                                        </div>
                                        </div>


                                                <a href="/buku/edit/{{$item2->id}}" class="btn btn-info btn-sm"><i class="fa fa-pencil-alt"></i></a>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus{{$item2->id}}">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="hapus{{$item2->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan!</h1>
                                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        Yakin Data Buku {{$item2->judul}} di Hapus?
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <form action="/buku/{{$item2->id}}" method="post">
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

@endsection


@section('css')
    <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('js')
    <!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
</script>
@endsection