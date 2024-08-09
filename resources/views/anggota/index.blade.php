@extends('layouts.master')
@section('title','Anggota')
@section('heading','Halaman Anggota')

@section('content')
                <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">                           
                            <a href="/anggota/form" class="btn btn-primary"><i class="fa fa-folder-plus"></i> Tambah Data</a>
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
                                            <th>No Kartu</th>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>  
                                            <th>Aksi</th>                                          
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($ang as $item)
                                        <tr>
                                        <td>{{$nomor++}}</td>
                                        <td>{{$item->no_kartu}}</td>
                                        <td><img src="{{asset('foto/'.$item->foto)}}" height="50"></td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->tempatLahir}}</td>
                                        <td>{{$item->tanggalLahir}}</td>
                                        <td>{{$item->jenisKelamin}}</td>
                                        <td>{{$item->alamat}}</td>  
                                            <td>

                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#detail{{$item->id}}">Detail</i>
                                            </button>

                                            <!-- Modal Detail-->
                                            <div class="modal fade" id="detail{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail {{$item->nama}}</h1>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <table class="table">

                                        <tbody>
                                        
                                            <tr>
                                                <td>Nomor Kartu</td>
                                                <th scope="row">{{$item->no_kartu}}</th>
                                            </tr>
                                            <tr>
                                                <td>Foto</td>
                                                <th scope="row"><img src="{{ asset('/foto/'.$item->foto) }}" width="100" alt=""></th>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <th scope="row">{{$item->nama}}</th>
                                            </tr>
                                            <tr>
                                                <td>Tempat Lahir</td>
                                                <th scope="row">{{$item->tempatLahir}}</th>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Lahir</td>
                                                <th scope="row">{{$item->tanggalLahir}}</th>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <th scope="row">{{$item->jenisKelamin}}</th>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <th scope="row">{{$item->alamat}}</th>
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


                                                <a href="/anggota/edit/{{$item->id}}" class="btn btn-info btn-sm"><i class="fa fa-pencil-alt"></i></a>
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
                                                        Yakin Data Anggota {{$item->nama}} di Hapus?
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <form action="/anggota/{{$item->id}}" method="post">
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