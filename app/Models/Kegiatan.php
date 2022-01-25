<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    public $table = 'kegiatans';

    protected $fillable = [
        'namakegiatan',
    ];

    public function pengguna()
    {
        return $this->hasMany(Pengguna::class, 'kegiatan_id');
    }
}
