@extends('user.master')

@section('titleUser')
PTIPD | UINSGD
@endsection

@section('contentUser')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">Data kegiatan
                            <a href="{{ route('kegiatan.index') }}" class="btn btn-sm btn-primary float-right">Kembali</a>
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <label for="jenis">
                                    Nama Kegiatan :
                                </label>
                                {{ $kegiatan->namakegiatan }}
                                <br>

                                <label for="jenis">
                                    Dibuat Pada :
                                </label>
                                {{$kegiatan->created_at->format('l, d F Y')}}
                                <br>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
