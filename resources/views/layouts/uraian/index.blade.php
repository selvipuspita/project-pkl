@extends('user.master')

@section('titleUser')
PTIPD | UINSGD
@endsection

@section('judulnyaUser')
<h2 align="center">Menampilkan Data Uraian</h2>
@endsection

@section('contentUser')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr align="center">
                                <th scope="col">No</th>
                                <th scope="col">Nama Aktifitas</th>
                                <th scope="col">Dibuat pada</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        @php $no = 1; @endphp
                        @foreach($uraian as $data)
                        <tr scope="row">
                            <td>
                                {{$no++}}
                            </td>
                            <td>
                                {{$data->namauraian}}
                            </td>
                            <td>
                                {{$data->created_at->format('l, d F Y')}}
                            </td>
                            <td>
                                <a href="{{ route('uraian.show', $data->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <a href="{{ route('uraian.edit', $data->id)}}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <form action="{{route('uraian.destroy', $data->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
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
