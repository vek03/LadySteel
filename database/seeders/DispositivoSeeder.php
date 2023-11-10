<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DispositivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dispositivos')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('dispositivos')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('dispositivos')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
