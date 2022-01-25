<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pengguna;

class Uraian extends Model
{
    use HasFactory;

    public $table = 'uraians';

    protected $fillable = [
        'namauraian',
        'tanggal',
    ];

    public function penggunas()
    {
        return $this->hasMany(Pengguna::class);
    }
}
