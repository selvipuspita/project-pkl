<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PenggunaSeeder extends Seeder
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
                'user_id' => 3,
                'date' => Carbon::now(),
                'jamDatang' => '08:00',
                'jamPulang' => '16:00',
                'jamLembur' => Carbon::now(),
                'kegiatan_id' => 1,
                'uraian' => 'Monitoring Website UIN Bandung, Monitoring Server salam (Portal Akademik), Monitoring server salam (Administrator Akademik), Monitoring server salam (Administrator Registrasi), Menganggur Saja',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'user_id' => 4,
                'date' => Carbon::now(),
                'jamDatang' => '08:00',
                'jamPulang' => '16:00',
                'jamLembur' => Carbon::now(),
                'kegiatan_id' => 1,
                'uraian' => 'Monitoring Website UIN Bandung, Monitoring Server salam (Portal Akademik), Monitoring server salam (Administrator Akademik), Monitoring server salam (Administrator Registrasi), Menganggur Saja',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'user_id' => 4,
                'date' => Carbon::now(),
                'jamDatang' => '08:00',
                'jamPulang' => '16:00',
                'jamLembur' => Carbon::now(),
                'kegiatan_id' => 1,
                'uraian' => 'Monitoring Website UIN Bandung, Monitoring Server salam (Portal Akademik), Monitoring server salam (Administrator Akademik), Monitoring server salam (Administrator Registrasi), Menganggur Saja',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'user_id' => 5,
                'date' => Carbon::now(),
                'jamDatang' => '08:00',
                'jamPulang' => '16:00',
                'jamLembur' => Carbon::now(),
                'kegiatan_id' => 1,
                'uraian' => 'Monitoring Website UIN Bandung, Monitoring Server salam (Portal Akademik), Monitoring server salam (Administrator Akademik), Monitoring server salam (Administrator Registrasi), Menganggur Saja',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'user_id' => 5,
                'date' => Carbon::now(),
                'jamDatang' => '08:00',
                'jamPulang' => '16:00',
                'jamLembur' => Carbon::now(),
                'kegiatan_id' => 1,
                'uraian' => 'Monitoring Website UIN Bandung, Monitoring Server salam (Portal Akademik), Monitoring server salam (Administrator Akademik), Monitoring server salam (Administrator Registrasi), Menganggur Saja',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'user_id' => 5,
                'date' => Carbon::now(),
                'jamDatang' => '08:00',
                'jamPulang' => '16:00',
                'jamLembur' => Carbon::now(),
                'kegiatan_id' => 1,
                'uraian' => 'Monitoring Website UIN Bandung, Monitoring Server salam (Portal Akademik), Monitoring server salam (Administrator Akademik), Monitoring server salam (Administrator Registrasi), Menganggur Saja',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'user_id' => 6,
                'date' => Carbon::now(),
                'jamDatang' => '08:00',
                'jamPulang' => '16:00',
                'jamLembur' => Carbon::now(),
                'kegiatan_id' => 1,
                'uraian' => 'Monitoring Website UIN Bandung, Monitoring Server salam (Portal Akademik), Monitoring server salam (Administrator Akademik), Monitoring server salam (Administrator Registrasi), Menganggur Saja',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'user_id' => 6,
                'date' => Carbon::now(),
                'jamDatang' => '08:00',
                'jamPulang' => '16:00',
                'jamLembur' => Carbon::now(),
                'kegiatan_id' => 1,
                'uraian' => 'Monitoring Website UIN Bandung, Monitoring Server salam (Portal Akademik), Monitoring server salam (Administrator Akademik), Monitoring server salam (Administrator Registrasi), Menganggur Saja',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'user_id' => 6,
                'date' => Carbon::now(),
                'jamDatang' => '08:00',
                'jamPulang' => '16:00',
                'jamLembur' => Carbon::now(),
                'kegiatan_id' => 1,
                'uraian' => 'Monitoring Website UIN Bandung, Monitoring Server salam (Portal Akademik), Monitoring server salam (Administrator Akademik), Monitoring server salam (Administrator Registrasi), Menganggur Saja',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'user_id' => 6,
                'date' => Carbon::now(),
                'jamDatang' => '08:00',
                'jamPulang' => '16:00',
                'jamLembur' => Carbon::now(),
                'kegiatan_id' => 1,
                'uraian' => 'Monitoring Website UIN Bandung, Monitoring Server salam (Portal Akademik), Monitoring server salam (Administrator Akademik), Monitoring server salam (Administrator Registrasi), Menganggur Saja',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('penggunas')->insert($data);
    }
}
