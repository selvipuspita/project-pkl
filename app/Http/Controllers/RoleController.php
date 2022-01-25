<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Pengguna;
use App\Models\Kegiatan;
use App\Models\Uraian;

class RoleController extends Controller
{
    public function role()
    {
        $role=Auth::user()->role;

        if($role=='Administrator') {
            return view('layouts.admin.dashboard',
            [
                'pegawai' => User::where('role', 'Account User')->count(),
                'kegiatan' => Kegiatan::all()->count(),
                'uraian' => Uraian::all()->count(),
                'pengguna' => Pengguna::all()->count(),
            ]);
        } else {
            return view('layouts.pengguna.dashboard',
            [
                'pegawainya' => Pengguna::where('user_id', auth()->user()->id)->get()->count(),
                'kegiatannya' => Kegiatan::all()->count(),
                'uraiannya' => Uraian::all()->count(),
            ]);
        }
    }
}
