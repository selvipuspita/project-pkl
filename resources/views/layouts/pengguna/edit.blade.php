@extends('user.master')

@section('titleUser')
PTIPD | UINSGD
@endsection

@section('contentUser')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data {{ Auth::user()->name }}
                    <a href="{{ route('pengguna.index')}}" class="btn btn-sm  btn-success float-right"> <i class="fa fa-undo" aria-hidden="true"> Kembali</i></a>
                </div>
                <div class="card-body">
                    <form action="{{ route('pengguna.update', $pengguna->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-floating">
                            <label for="floatingInput">Hari dan Tanggal </label>
                            <input type="date" id="floatingInput" value="{{$pengguna->date}}" class="form-control @error('date')is-invalid @enderror" name="date" required>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputMDEx1">Jam Datang</label>
                                <input type="time" name="jamDatang" value="{{$pengguna->jamDatang}}" class="form-control @error('jamDatang')is-invalid @enderror" id="inputMDEx1">
                                @error('jamDatang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputMDEx1">Jam Pulang</label>
                                <input type="time" name="jamPulang" value="{{$pengguna->jamPulang}}" class="form-control @error('jamPulang')is-invalid @enderror" id="inputMDEx1">
                                @error('jamPulang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputMDEx1">Jam Lembur</label>
                                <input type="time" name="jamLembur" value="{{$pengguna->jamLembur}}" class="form-control @error('jamPulang')is-invalid @enderror" id="inputMDEx1">
                                @error('jamLembur')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-floating">
                            <label for="kegiatan">Kegiatan </label>
                            <select class="form-control" name="kegiatan_id" value="{{$pengguna->kegiatan_id}}" id="exampleFormControlSelect2">
                                @foreach ($datakegiatan as $datanya)
                                    <option value="{{$datanya->id}}">{{$datanya->namakegiatan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="form-floating">
                            <div class="form-check">
                                <label for="uraian">Uraian Hasil :</label><br>
                                @foreach ($datauraian as $uraian)
                                    <input type="checkbox" name="uraian_id" id="flexCheckDefault" class="form-check-input @error('uraian')is-invalid @enderror" value="{{$pengguna->uraian_id}}">
                                    <label class="form-check-label" for="flexCheckDefault">{{$uraian->namauraian}}</label><br>
                                @endforeach
                                @error('uraian_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
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
