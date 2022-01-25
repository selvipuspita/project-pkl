<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Kegiatan;
use App\Models\Uraian;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('layouts.pengguna.index', [
            'penggunas' => Pengguna::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.pengguna.create', [
            'datakegiatan' => Kegiatan::all(),
            'datauraian' => Uraian::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'unique:users',
            'date' => 'required|date',
            'jamDatang' => 'required',
            'jamPulang' => 'required',
            'jamLembur' => 'required',
            'kegiatan_id' => 'required',
            'uraian' => 'required',
        ],['aktifitas_id.required' => 'Kegiatan Harus Di isi!.']);

        $pengguna = new Pengguna;
        $pengguna->user_id = auth()->user()->id;
        $pengguna->date = $request->date;
        $pengguna->jamDatang = $request->jamDatang;
        $pengguna->jamPulang = $request->jamPulang;
        $pengguna->jamLembur = $request->jamLembur;
        $pengguna->kegiatan_id = $request->kegiatan_id;
        $pengguna->uraian = implode(', ', $request->uraian);
        $pengguna->save();
        return redirect()->route('pengguna.index')->with('succsess','Product created successfully');

        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('layouts.pengguna.show', compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('layouts.pengguna.edit',[
            'datakegiatan' => Kegiatan::all(),
            'datauraian' => Uraian::all()
        ], compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'unique:users' .$id,
            'date' => 'required|date',
            'jamDatang' => 'required|time',
            'jamPulang' => 'required|time',
            'jamLembur' => 'required|time',
            'kegiatan_id' => 'required|unique:kegiatans,namakkegiatan,' .$id,
            'uraian' => 'required'
        ]);
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->user_id = auth()->user()->id;
        $pengguna->date = $request->date;
        $pengguna->jamDatang = $request->jamDatang;
        $pengguna->jamPulang = $request->jamPulang;
        $pengguna->jamLembur = $request->jamLembur;
        $pengguna->kegiatan_id = $request->kegiatan_id;
        $pengguna->uraian = $request->uraian;
        $pengguna->save();
        return view('layouts.pengguna.show', compact('pengguna'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengguna::findOrFail($id)->delete();
        return redirect()->route('pengguna.index');
    }
}
