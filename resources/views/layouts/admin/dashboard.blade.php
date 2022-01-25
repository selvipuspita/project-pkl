@extends('admin.master')

@section('titleAdmin')
ADMIN | PTIPD UINSGD
@endsection

@section('judulnyaAdmin')
    <h1>Data Dashboard</h1>
@endsection

@section('contentAdmin')
<h4> Selamat Datang {{ Auth::user()->name }}</h4><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fa fa-file nav-icon"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Pegawai</span>
                        <span class="info-box-number">
                        {{ $pegawai }} Orang
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-file nav-icon"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Kegiatan</span>
                        <span class="info-box-number">
                            {{$kegiatan}} Kegiatan
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fa fa-file nav-icon"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Uraian</span>
                        <span class="info-box-number">
                            {{$uraian}} Uraian
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-file nav-icon"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Laporan</span>
                        <span class="info-box-number">
                            {{$pengguna}} Laporan
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
    </div>
@endsection
