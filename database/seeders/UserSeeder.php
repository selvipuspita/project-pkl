<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
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
                'nip' => 012301230123,
                'name' => 'Ruslan Ramdani',
                'email' => 'ruslanramdani1st@gmail.com',
                'golongan' => 'BLU',
                'role' => 'Administrator',
                'password' => bcrypt('qweasdzxc123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 32103210321,
                'name' => 'Account Admin',
                'email' => 'admin@gmail.com',
                'golongan' => 'A 3',
                'role' => 'Administrator',
                'password' => bcrypt('admin1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 197909302009121002,
                'name' => 'Undang Syaripudin',
                'email' => 'undangsyaripuddin@gmail.com',
                'golongan' => 'BLU',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 198310232009121005,
                'name' => 'Mohamad Irfan',
                'email' => 'mohammadirfan@gmail.com',
                'golongan' => 'BLU',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 199207092016033002,
                'name' => 'Yogi Saputra',
                'email' => 'yogisaputra@gmail.com',
                'golongan' => 'BLU',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            
            [
                'nip' => 197003171991031006,
                'name' => 'Mamat Rohimat',
                'email' => 'mamatrohimat@gmail.com',
                'golongan' => 'A 4',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 197011222006041000,
                'name' => 'Praptono Imam Nugroho',
                'email' => 'praptoimamnugroho@gmail.com',
                'golongan' => 'A 4',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 196412161992031001,
                'name' => 'Khoirudin',
                'email' => 'khoirudin@gmail.com',
                'golongan' => 'A 4',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 199502012019044032,
                'name' => 'Fitri Puspitasari Budiana',
                'email' => 'fitripuspitasaribudiana@gmail.com',
                'golongan' => 'A 4',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 197811062009013002,
                'name' => 'Gitarja Sandi',
                'email' => 'gitarjasandi@gmail.com',
                'golongan' => 'A 4',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 197804172005011005,
                'name' => 'Cecep Nurul Alam',
                'email' => 'cecepnurulalam@gmail.com',
                'golongan' => 'A 4',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 199207032019043056,
                'name' => 'Abdurrohim Saefulloh',
                'email' => 'abdurrohimsaefulloh@gmail.com',
                'golongan' => 'A 4',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 199408122019043031,
                'name' => 'Furiansyah Dipraja',
                'email' => 'furiansyahdipraja@gmail.com',
                'golongan' => 'A 4',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 198511082009013001,
                'name' => 'Rahmat Zaenal Abidin',
                'email' => 'rahmatzaenalabidin@gmail.com',
                'golongan' => 'A 4',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 197805312007101001,
                'name' => 'Jumadi',
                'email' => 'jumadi@gmail.com',
                'golongan' => 'A 4',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 198009132006041002,
                'name' => 'Ichsan Taufik',
                'email' => 'ichsantaufik@gmail.com',
                'golongan' => 'A 4',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 199303122016033003,
                'name' => 'Yogi Wijaya',
                'email' => 'yogiwijaya@gmail.com',
                'golongan' => 'A 4',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 3204053008970003,
                'name' => 'Alfi Gusman',
                'email' => 'alfigusman@gmail.com',
                'golongan' => 'A 4',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'nip' => 3204250203980001,
                'name' => 'Piscal Pratama Putra',
                'email' => 'piscalpratamaputra@gmail.com',
                'golongan' => 'A 4',
                'role' => 'Account User',
                'password' => bcrypt('user1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        DB::table('users')->insert($data);
    }
}
