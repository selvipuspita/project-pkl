@extends('user.master')

@section('titleUser')
ADMIN | UINSGD
@endsection

@section('contentUser')
<div class="container">
    <div class="row row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Edit Data kegiatan
                    <a href="{{ route('kegiatan.index')}}" class="btn btn-sm  btn-success float-right"> <i class="fa fa-undo" aria-hidden="true"> Kembali</i></a>
                </div>
                <div class="card-body">
                    <form action="{{ route('kegiatan.update', $kegiatan->id)}}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-floating">
                            <label for="floatingInput">Nama kegiatan </label>
                            <input type="text" id="floatingInput" value="{{$kegiatan->namakegiatan}}" class="form-control @error('namakegiatan')is-invalid @enderror" name="namakegiatan" required>
                            @error('namakegiatan')
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
