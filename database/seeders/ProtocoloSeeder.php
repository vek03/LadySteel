<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProtocoloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('protocolos')->insert([
            'id_report' => 4,
            'protocol' => 'BO321321321321321',
            'status' => 'Protocolo Enviado!',
            'created_at' => '2023-08-15',
            'updated_at' => '2023-08-15'
        ]);

        DB::table('protocolos')->insert([
            'id_report' => 5,
            'protocol' => 'BO123123123123123',
            'status' => 'Protocolo Enviado!',
            'created_at' => '2023-08-15',
            'updated_at' => '2023-08-15'
        ]);

        DB::table('protocolos')->insert([
            'id_report' => 6,
            'status' => 'Sem Coordenadas',
            'created_at' => '2023-08-15',
            'updated_at' => '2023-08-15'
        ]);
    }
}
