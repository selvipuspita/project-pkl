@extends('admin.master')

@section('titleAdmin')
ADMIN | UINSGD
@endsection

@section('judulAdmin')
<h2 align="center">Menampilkan Semua Akun</h2>
@endsection

@section('contentAdmin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr align="center">
                                <th scope="col">No</th>
                                <th scope="col">NIP / NIK</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Email</th>
                                <th scope="col">Golongan</th>
                                <th scope="col">Peran Akun</th>
                                <th scope="col">Dibuat Pada</th>
                            </tr>
                        </thead>
                        @php $no = 1; @endphp
                        @foreach($user as $data)
                        <tr scope="row">
                            <td >
                                {{$no++}}
                            </td>
                            <td>
                                {{$data->nip}}
                            </td>
                            <td>
                                {{$data->name}}
                            </td>
                            <td>
                                {{$data->email}}
                            </td>
                            <td>
                                <center>
                                    {{$data->golongan}}
                                </center>
                            </td>
                            <td>
                                {{$data->role}}
                            </td>
                            <td>
                                {{\Carbon\Carbon::parse($data->created_at)->format('l, d F Y H:i')}}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
