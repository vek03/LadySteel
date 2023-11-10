<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DenunciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('denuncias')->insert([
            'id_victim' => 4,
            'latitude' => '-23.504323',
            'longitude' => '-46.497824',
            'created_at' => Carbon::now()
        ]);

        DB::table('denuncias')->insert([
            'id_victim' => 5,
            'latitude' => '-23.521905',
            'longitude' => '-46.475924',
            'created_at' => Carbon::now()
        ]);

        DB::table('denuncias')->insert([
            'id_victim' => 6,
            'latitude' => '-23.531064',
            'longitude' => '-46.461948',
            'created_at' => Carbon::now()
        ]);

        DB::table('denuncias')->insert([
            'id_victim' => 4,
            'id_attendant' => 2,
            'latitude' => '-23.504323',
            'longitude' => '-46.497824',
            'status' => 1,
            'created_at' => '2023-08-15',
            'updated_at' => '2023-08-15'
        ]);

        DB::table('denuncias')->insert([
            'id_victim' => 5,
            'id_attendant' => 2,
            'latitude' => '-23.521905',
            'longitude' => '-46.475924',
            'status' => 1,
            'created_at' => '2023-08-15',
            'updated_at' => '2023-08-15'
        ]);

        DB::table('denuncias')->insert([
            'id_victim' => 6,
            'id_attendant' => 2,
            'latitude' => '-23.531064',
            'longitude' => '-46.461948',
            'status' => 1,
            'created_at' => '2023-08-15',
            'updated_at' => '2023-08-15'
        ]);
    }
}
