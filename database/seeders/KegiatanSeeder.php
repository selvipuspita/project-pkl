<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'namakegiatan' => 'Lembur PTID',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'namakegiatan' => 'Nganggur',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('kegiatans')->insert($data);
    }
}
