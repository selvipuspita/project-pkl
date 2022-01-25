@extends('admin.master')

@section('titleAdmin')
ADMIN | Pangkalan Data
@endsection

@section('contentAdmin')
    <div class="table-responsive">
        <table align="right">

        </table>
        <table align="center">
            <tr>
                <td>
                    <img src="{{asset('AdminCSS/dist/img/uiin.png')}}" width="160" height="220">
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
                <td width="550">{{ $pengguna->namanya }}</td>
            </tr>
            <tr>
                <td>Hari dan Tanggal</td>
                <td>:</td>
                <td width="550">{{ $pengguna->date }}</td>
            </tr>
            <tr>
                <td>Waktu</td>
                <td>:</td>
                <td width="550">{{ $pengguna->waktu }}</td>
            </tr>
            <tr>
                <td>Kegiatan</td>
                <td>:</td>
                <td width="550">{{ $pengguna->kegiatan }}</td>
            </tr>
            <tr>
                <td >Uraian Hasil</td>
                <td>:</td>
                <td width="550">{{ $pengguna->uraian }}</td>
            </tr>
        </table>
        <br><br><br><br><br><br><br>
        <table align="right">
            <tr>
                <td width="260">Bandung, .....................</td>
            </tr>
            <tr>
                <td>Yang Melaksanakan Lembur,</td>
            </tr>
            <tr>
                <td height="80"></td>
            </tr>
            <tr>
                <td>.........................................</td>
            </tr>
            <tr>
                <td>NIP/NIK</td>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('pengguna.index')}}" class="btn btn-sm  btn-success float-right"> <i class="fa fa-undo" aria-hidden="true"> Kembali</i></a>
                </td>
                <td>
                    <a href="{{ route('pengguna.index')}}" class="btn btn-sm  btn-primary float-right"> <i class="fa fa-print" aria-hidden="true"> Print</i></a>
                </td>
            </tr>
        </table>
    </div>

@endsection
