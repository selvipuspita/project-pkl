@extends('user.master')

@section('titleUser')
PTIPD | Pangkalan Data
@endsection

@section('contentUser')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Tambah Data {{ Auth::user()->name }}
                        <a href="{{ route('pengguna.index')}}" class="btn btn-sm  btn-success float-right"> <i class="fa fa-undo" aria-hidden="true"> Kembali</i></a>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-denger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('uraian.store')}}" method="POST">
                            @csrf

                            <div class="form-floating">
                                <label for="floatingInput">Nama Aktifitas </label>
                                <input type="text" id="floatingInput" value="{{ old('namauraian')}}" class="form-control @error('namauraian')is-invalid @enderror" name="namauraian" placeholder="Masukan jenis aktifitas .." required>
                                @error('namauraian')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <br>
                            <div class="form-floating">
                                <button type="submit" class="w-100 btn btn-lg btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
