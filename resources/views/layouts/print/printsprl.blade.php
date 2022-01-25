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
        {{-- Create CSS
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> --}}
    </head>
    <body>
        <div class="table-responsive">
            <table align="center">
                <tr>
                    <td>
                        <img src="{{ asset('img/uiin.png') }}" width="160" height="220">
                    </td>
                    <td>
                        <center>
                            <b>
                                <font size="5">KEMENTRIAN AGAMA</font><br>
                                <font size="5">UNIVERSITAS ISLAM NEGRI</font><br>
                                <font size="5">SUNAN GUNUNG DJATI BANDUNG</font><br>
                                <font size="5">PUSAT TEKNOLOGI INFORMASI DAN</font><br>
                                <font size="5">PANGKALAN DATA</font><br>
                            </b>
                            <i>
                                <font size="3">Jl. A.H. Nasution No. 105 Cibiru Bandung 40614 <i class='fas fa-tty'></i> (022)
                                    7800525 Fax. </font><br>
                                <font size="3">(022)7803936 Website: <a
                                        href="http://ptipd.uinsgd.ac.id">http://ptipd.uinsgd.ac.id</a> E-mail:
                                    ptipd@uinsgd.ac.id</font><br>
                            </i>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td colspan="8">
                        <hr color="black">
                    </td>
                </tr>
            </table>
            <br>
                <center>
                    <b>
                        <u><font size="4">SURAT PERINTAH KERJA LEMBUR</font><br></u>
                    </b>
                    Nomor : B- /Un. 05/PTIPD/PP.00.9/06/2021
                </center>
            <br>
            <table align="center">
                <tr>
                    <td>
                        <font size="2">Yang bertanda tangan dibawah ini Kuasa Pengguna Anggaran UIN Sunan Gunung Djati Bandung
                            memerintahkan <br>
                            <b>Kerja Lembur</b>
                            kepada pegawai tersebut dibawah ini untuk tanggal 08 November 2021, dengan perincian <br> pekerjaan
                            sebagai berikut:
                        </font>
                    </td>
                </tr>
                </td>
            </table>
            <br>
            <table align="center" border="1">
                <thead>
                    <tr align="center">
                        <th scope="col">No.</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">GOL</th>
                        <th scope="col">JABATAN</th>
                        <th scope="col">JENIS PEKERJAAN YANG DILEMBURKAN</th>
                    </tr>
                </thead>
                @php $no = 1; @endphp
                <tr>
                    <td> {{ $no++ }} </td>
                    <td width="200"> {{ Auth::user()->name }}</td>
                    <td width="150"><center> - </center></td>
                    <td width="150">{{ Auth::user()->golongan }}</td>
                    <td width="300">{{ $pengguna->uraian }}</td>
                </tr>
            </table>
            <br>

            Demikian agar dilaksanakan dengan penuh rasa tanggung jawab.
            <br><br><br><br><br><br><br>

            <table align="right">
                <tr>
                    <td width="260">Bandung, {{Illuminate\Support\Carbon::now()->format('l, d F Y')}}</td>
                </tr>
                <tr>
                    <td>An. Kuasa Pengguna Anggaran<br>
                        Pejabat Pembuat Komitmen,</td>
                </tr>
                <tr>
                    <td height="80"></td>
                </tr>
                <tr>
                    <td>.........................................</td>
                </tr>
                <tr>
                    <td>NIP/NIK : {{Auth::user()->nip}}</td>
                </tr>
            </table>
        </div>
    </body>
</html>
