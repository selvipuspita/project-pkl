<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UraianSeeder extends Seeder
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
                'namauraian' => 'Monitoring Website UIN Bandung',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'namauraian' => 'Monitoring Server salam (Portal Akademik)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'namauraian' => 'Monitoring server salam (Administrator Akademik)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'namauraian' => 'Monitoring server salam (Administrator Registrasi)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('uraians')->insert($data);
    }
}
