@extends('user.master')

@section('titleUser')
PTIPD | UINSGD
@endsection

@section('judulnyaUser')
<h2 align="center">Menampilkan Data Lembur</h2>
@endsection

@section('contentUser')
        <div class="col-md-80">
            <div class="card">
                <div class="card-header">
                    Data {{ Auth::user()->name }}
                    <a href="{{ route('DashboardUser')}}" class="btn btn-sm  btn-success float-right"> <i class="fa fa-undo" aria-hidden="true"> Kembali </i></a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr align="center">
                                <th scope="col">No</th>
                                <th scope="col">NIP / NIK</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Golongan</th>
                                <th scope="col">Jam Lembur</th>
                                <th scope="col">Kegiatan</th>
                                <th scope="col">Uraian Hasil</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @php $no = 1; @endphp
                        @foreach($penggunas as $data)
                        <tbody>
                            <tr>
                                <th scope="row">
                                    {{$no++}}
                                </th>
                                <td>
                                    {{Auth::user()->nip}}
                                </td>
                                <td>
                                    {{Auth::user()->name}}
                                </td>
                                <td>
                                    {{Auth::user()->golongan}}
                                </td>
                                <td>
                                    {{\Carbon\Carbon::parse($data->jamLembur)->format('H:i')}}
                                </td>
                                <td>
                                    {{$data->kegiatan->namakegiatan}}
                                </td>
                                <td>
                                    {{$data->uraian}}
                                </td>
                                <td>
                                    <a href="{{ route('pengguna.show', $data->id)}}" class="btn btn-warning btn-sm">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{ route('pengguna.edit', $data->id)}}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <form action="{{ route('pengguna.destroy', $data->id)}}" method="POST" class="d-inline">

                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" type="submit">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

@endsection
