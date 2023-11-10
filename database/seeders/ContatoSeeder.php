<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contatos')->insert([
            'id_user' => 4,
            'contact' => 11959955896,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('contatos')->insert([
            'id_user' => 4,
            'contact' => 11992931601,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('contatos')->insert([
            'id_user' => 5,
            'contact' => 11932212110,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('contatos')->insert([
            'id_user' => 5,
            'contact' => 11949388127,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('contatos')->insert([
            'id_user' => 6,
            'contact' => 11959955896,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('contatos')->insert([
            'id_user' => 6,
            'contact' => 11992931601,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
