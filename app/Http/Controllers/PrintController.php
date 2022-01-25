<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Dompdf;
use PDF;

class PrintController extends Controller
{
    // public function printll($id)
    // {
    //     $pengguna = Pengguna::findOrFail($id);
    //     return view('layouts.print.printll', compact('pengguna'));
    // }

    // public function printsprl($id)
    // {
    //     $pengguna = Pengguna::findOrFail($id);
    //     return view('layouts.print.printsprl', compact('pengguna'));

    // }

    public function printll($id)
    {
        $path = base_path('uiin.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $pengguna = Pengguna::findOrFail($id);
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true, 'defaultFont' => 'sans-serif'])->loadView('layouts.print.printll', ['pengguna' => $pengguna], compact('pic'));
        // return $pdf->download('Kegiatan_Pegawai.pdf');
        return $pdf->stream();
    }

    public function printsprl($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        $pdf = PDF::loadView('layouts.print.printsprl', ['pengguna' => $pengguna])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('Kegiatan_Pegawai.pdf');
    }
}
