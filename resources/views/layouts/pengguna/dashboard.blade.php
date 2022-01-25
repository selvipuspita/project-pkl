@extends('user.master')

@section('titleUser')
    PTIPD | UINSGD
@endsection

@section('contentUser')
    <h4> Selamat Datang Kembali {{ Auth::user()->name }}</h4><br>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fa fa-file nav-icon"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Lembur</span>
                        <span class="info-box-number">
                            {{ $pegawainya }} Lembur
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
                            {{$kegiatannya}} Kegiatan
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fa fa-file nav-icon"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Uraian</span>
                        <span class="info-box-number">
                            {{$uraiannya}} Uraian
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
            <!-- /.col -->
        </div>
    </div>


@endsection
