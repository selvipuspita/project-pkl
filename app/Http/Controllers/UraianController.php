<?php

namespace App\Http\Controllers;

use App\Models\Uraian;
use Illuminate\Http\Request;

class UraianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uraian = Uraian::all();
        return view('layouts.uraian.index', compact('uraian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.uraian.create');
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
            'namauraian' => 'required|string|max:50',
        ]);

        $uraian = new Uraian();
        $uraian->namauraian = $request->namauraian;
        $uraian->save();
        $uraian = $request->all();
        return redirect()->route('uraian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Uraian  $uraian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $uraian = Uraian::findOrFail($id);
        return view('layouts.uraian.show', compact('uraian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Uraian  $uraian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uraian = Uraian::findOrFail($id);
        return view('layouts.uraian.edit', compact('uraian'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Uraian  $uraian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'namauraian' => 'required|max:255',
        ]);
        $uraian = Uraian::findOrFail($id);
        $uraian->namauraian = $request->namauraian;
        $uraian->save();
        return view('layouts.uraian.show', compact('uraian'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Uraian  $uraian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Uraian::findOrFail($id)->delete();
        return redirect()->route('uraian.index');
    }
}
