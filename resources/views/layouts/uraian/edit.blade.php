@extends('user.master')

@section('titleUser')
PTIPD | Pangkalan Data
@endsection

@section('contentUser')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Data {{ Auth::user()->name }}
                    <a href="{{ route('uraian.index')}}" class="btn btn-sm  btn-success float-right"> <i class="fa fa-undo" aria-hidden="true"> Kembali</i></a>
                </div>
                <div class="card-body">
                    <form action="{{ route('uraian.update', $uraian->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-floating">
                            <label for="floatingInput">Nama Aktifitas </label>
                            <input type="text" id="floatingInput" value="{{$uraian->namauraian}}" class="form-control @error('namauraian')is-invalid @enderror" name="namauraian" placeholder="Masukan Aktifitas disini .." required>
                            @error('namanya')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <button type="submit" class="w-100 btn btn-lg btn-primary">
                            U P D A T E
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
