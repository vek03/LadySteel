<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    static $tipos = [
        'Vitima',
        'Atendente',
        'Supervisor'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$tipos as $tipo) {
            DB::table('tipos')->insert([
                'type' => $tipo
            ]);
        }
    }
}
