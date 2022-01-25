<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Pengguna;
use App\Models\Kegiatan;

class AdminController extends Controller
{
    public function index()
    {
        $user = DB::table('users')->where('role', 'Account User')->get();
        return view('layouts.admin.index', compact('user'));
    }

    public function dashboard()
    {
        $pegawai = DB::table('users')->where('role', 'Account User')->count();
        $kegiatan = DB::table('kegiatans')->count();
        $uraian = DB::table('uraians')->count();
        $pengguna = DB::table('penggunas')->count();
        // dd($pegawai, $kegiatan, $uraian, $pengguna);
        return view('layouts.admin.dashboard', compact('pegawai','kegiatan','uraian','pengguna'));
    }

    public function laporan()
    {
        $pengguna = Pengguna::with('users')->get();
        $kegiatan = Kegiatan::all();
        $laporan = DB::table('users')->where('role', 'Account User')->get();
        return view('layouts.admin.laporan', compact('pengguna','kegiatan','laporan'));
    }

    public function dashboardUser()
    {
        $pegawainya = DB::table('penggunas')->where('user_id', auth()->user()->id)->get()->count();
        $kegiatannya = DB::table('kegiatans')->count();
        $uraiannya = DB::table('uraians')->count();
        // dd($pegawai, $kegiatan, $uraian, $pengguna);
        return view('layouts.pengguna.dashboard', compact('pegawainya','kegiatannya','uraiannya'));
    }
}
