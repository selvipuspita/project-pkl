@extends('user.master')

@section('titleUser')
PTIPD | UINSGD
@endsection

@section('contentUser')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
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

                        <form action="{{ route('pengguna.store')}}" method="POST">
                            @csrf
                            <div class="form-floating">
                                <label for="floatingInput">Hari dan Tanggal </label>
                                <input type="date" id="floatingInput" value="{{ old('date')}}" class="form-control @error('date')is-invalid @enderror" name="date" required>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputMDEx1">Jam Datang</label>
                                    <input type="time" name="jamDatang" class="form-control" id="inputMDEx1">
                                    @error('jamDatang')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputMDEx1">Jam Pulang</label>
                                    <input type="time" name="jamPulang" class="form-control" id="inputMDEx1">
                                    @error('jamPulang')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputMDEx1">Jam Lembur</label>
                                    <input type="time" name="jamLembur" class="form-control" id="inputMDEx1">
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
                                <select class="form-control" name="kegiatan_id" id="exampleFormControlSelect2">
                                    <option value="">-- Pilih Kegiatan --</option>
                                    @foreach ($datakegiatan as $datanya)
                                        <option value="{{$datanya->id}}" {{ old('kegiatan_id') == $datanya->id ? 'selected' : null }}>{{$datanya->namakegiatan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="form-floating">
                                <div class="form-check">
                                    <label for="uraian">Uraian Hasil</label><br>
                                    @foreach ($datauraian as $uraian)
                                        <input type="checkbox" name="uraian[]" id="flexCheckDefault" class="form-check-input" value="{{$uraian->namauraian}}">
                                        <label class="form-check-label" for="flexCheckDefault">{{$uraian->namauraian}}</label><br>
                                    @endforeach
                                    @error('uraian')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-floating">
                                <button type="submit" class="w-100 btn btn-lg btn-primary">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
