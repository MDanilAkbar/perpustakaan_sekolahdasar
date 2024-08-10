@extends('layouts.master')
@section('title','Halaman Dashboard')
@section('heading','Halaman Dashboard')

@section('bc')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
@endsection

@section('content')
    {{--<div class="card">
        <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools"> 
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>--}}
        {{--</div>
        <div class="card-body">
            nanti akan ada tampilan dashboard, mohon sabar
        </div>
        <!-- /.card-body -->--}}
<br>
<section class="content">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- Small box -->
            <div class="small-box bg-primary">
                <div class="inner">
                    <h1></h1>
                    <p>Data Anggota</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-users"></i>
                </div>
                <a href="/anggota/" class="small-box-footer">
                    Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- Small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h1></h1>
                    <p>Data Buku</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-book"></i>
                </div>
                <a href="/buku/" class="small-box-footer">
                    Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- Small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h1></h1>
                    <p>Data Peminjaman</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-upload"></i>
                </div>
                <a href="/peminjaman/" class="small-box-footer">
                    Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- Small box -->
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h1></h1>
                    <p>Data Pengembalian</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-download"></i>
                </div>
                <a href="/pengembalian/" class="small-box-footer">
                    Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>



    </div>
@endsection
{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}