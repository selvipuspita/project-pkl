@extends('user.master')

@section('titleUser')
PTIPD | UINSGD
@endsection

@section('contentUser')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <div class="justify-content-start">
                                    <h4> Data {{Auth::user()->name}} </h4>
                                </div>
                                <div class="justify-content-between">
                                    <a href="{{ route('printll', $pengguna->id)}}" class="btn btn-sm btn-primary">PRINT LL</a>
                                    <a href="{{ route('printsprl', $pengguna->id)}}" class="btn btn-sm btn-primary">PRINT SPRL</a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover">

                               <tr scope="row">
                                   <td>
                                        <label for="nip">
                                            NIP/NIK
                                        </label>
                                   </td>
                                   <td>:</td>
                                   <td>{{Auth::user()->nip}}</td>
                               </tr>

                               <tr scope="row">
                                   <td>
                                        <label for="nama">
                                            Nama Lengkap
                                        </label>
                                   </td>
                                   <td>:</td>
                                   <td>{{Auth::user()->name}}</td>
                               </tr>

                               <tr scope="row">
                                   <td>
                                        <label for="golongan">
                                            Golongan
                                        </label>
                                   </td>
                                   <td>:</td>
                                   <td>{{Auth::user()->golongan}}</td>
                               </tr>

                               <tr scope="row">
                                   <td>
                                        <label for="tanggal">
                                            Hari dan Tanggal
                                        </label>
                                   </td>
                                   <td>:</td>
                                   <td>{{\Carbon\Carbon::parse($pengguna->date)->format('l, d F Y')}}</td>
                               </tr>
                               <tr scope="row">
                                   <td>
                                        <label for="waktu">
                                            Waktu
                                        </label>
                                   </td>
                                   <td>:</td>
                                   <td>
                                        Datang : {{\Carbon\Carbon::parse($pengguna->jamDatang)->format('H:i')}} <br>
                                        Pulang : {{\Carbon\Carbon::parse($pengguna->jamPulang)->format('H:i')}} <br>
                                        Lembur : {{\Carbon\Carbon::parse($pengguna->jamLembur)->format('H:i')}}
                                    </td>
                               </tr>

                               <tr scope="row">
                                   <td>
                                        <label for="kegiatan">
                                            Kegiatan
                                        </label>
                                   </td>
                                   <td>:</td>
                                   <td>{{$pengguna->kegiatan->namakegiatan}}</td>
                               </tr>

                               <tr scope="row">
                                   <td>
                                        <label for="uraian">
                                            Uraian Hasil
                                        </label>
                                   </td>
                                   <td>:</td>
                                   <td>{{$pengguna->uraian}}</td>
                               </tr>
                            </table>
                            <div class="mr-auto" align="rignt">
                                <a href="{{ route('pengguna.index')}}" class="btn btn-sm  btn-success float-right"> <i class="fa fa-undo" aria-hidden="true"> Kembali </i></a><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
