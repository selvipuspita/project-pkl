<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PTIPD | UINSGD</title>
        <link rel="icon" type="image/x-icon" href="{{asset('img/logonya.png')}}" />
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    </head>
    <body>
        <div class="container">
            <div class="table-responsive">
                <table align="center">
                    <tr>
                        <td>
                            <img src="<?php echo $pic?>" width="140" height="200">
                        </td>
                        <td>
                        <center>
                                <b>
                                    <font size="5">KEMENTRIAN AGAMA</font><br>
                                    <font size="5">UNIVERSITAS ISLAM NEGRI</font><br>
                                    <font size="5">SUNAN GUNUNG DJATI BANDUNG</font><br>
                                    <font size="5">PUSAT TEKNOLOGI INFORMASI</font><br>
                                    <font size="5">DAN PANGKALAN DATA</font><br>
                                </b>
                                <i>
                                    <font size="3">Jl. A.H. Nasution No. 105 Cibiru Bandung 40614 <i class='fas fa-tty'></i> (022) 7800525 Fax. </font><br>
                                    <font size="3">(022)7803936  Website: <a href="http://ptipd.uinsgd.ac.id">http://ptipd.uinsgd.ac.id</a>  E-mail: ptipd@uinsgd.ac.id</font><br>
                                </i>
                        </center>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <hr color="black">
                        </td>
                    </tr>
                </table>
                <table align="center">
                    <tr align="center">
                        <td>
                            <font size="3">LAPORAN LEMBUR</font>
                        </td>
                    </tr>
                    <tr align="center">
                        <td>
                            <font size="3">PUSAT INFORMASI DAN TEKNOLOGI</font>
                        </td>
                    </tr>
                    <tr align="center">
                        <td>
                            <font size="3">UIN SUNAN GUNUNG DJATI BANDUNG</font>
                        </td>
                    </tr>
                </table>
                <br>
                <table align="center">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td width="550"> {{Auth::user()->name}}</td>
                    </tr>
                    <tr>
                        <td>Hari dan Tanggal</td>
                        <td>:</td>
                        <td width="550">{{\Carbon\Carbon::parse($pengguna->date)->format('l, d F Y')}}</td>
                    </tr>
                    <tr>
                        <td>Waktu</td>
                        <td>:</td>
                        <td width="550">
                            {{\Carbon\Carbon::parse($pengguna->jamPulang)->format('H:i')}} -
                            {{\Carbon\Carbon::parse($pengguna->jamLembur)->format('H:i')}}
                        </td>
                    </tr>
                    <tr>
                        <td>Kegiatan</td>
                        <td>:</td>
                        <td width="550">{{$pengguna->kegiatan->namakegiatan}}</td>
                    </tr>
                    <tr>
                        <td >Uraian Hasil</td>
                        <td>:</td>
                        <td width="550">{{$pengguna->uraian}}</td>
                    </tr>
                </table>
                <br><br><br><br><br><br><br>
                <table align="right">
                    <tr>
                        <td width="260">Bandung, {{Illuminate\Support\Carbon::now()->format('l, d F Y')}}</td>
                    </tr>
                    <tr>
                        <td>Yang Melaksanakan Lembur,</td>
                    </tr>
                    <tr>
                        <td height="80"></td>
                    </tr>
                    <tr>
                        <td>........................................................</td>
                    </tr>
                    <tr>
                        <td>NIP/NIK : {{Auth::user()->nip}}</td>
                    </tr>
                    {{-- <tr>
                        <td>
                            <a href="{{ route('pengguna.show', $pengguna->id)}}" class="btn btn-sm  btn-success float-right"> <i class="fa fa-undo" aria-hidden="true"> Kembali</i></a>
                        </td>
                        <td>
                            <a href="{{ route('pengguna.index')}}" class="btn btn-sm  btn-primary float-right"> <i class="fa fa-print" aria-hidden="true"> Print</i></a>
                        </td>
                    </tr> --}}
                </table>
            </div>
        </div>
    </body>
</html>
