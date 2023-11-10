<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Supervisor
        DB::table('users')->insert([
            'id_type' => 3,
            'name' => 'Victor',
            'lastname' => 'Cardoso',
            'username' => '@vek',
            'email' => 'vektromboni@gmail.com',
            'password' => Hash::make('12345678'),
            'birthday' => '2005-12-19',
            'img' => 'img/avatares/avatar-one.png',
            'created_at' => '2023-08-15',
            'updated_at' => Carbon::now()
        ]);

        //Atendente
        DB::table('users')->insert([
            'id_type' => 2,
            'id_supervisor' => 1,
            'name' => 'João',
            'lastname' => 'Cabral',
            'username' => '@jp',
            'email' => 'jp@gmail.com',
            'password' => Hash::make('12345678'),
            'birthday' => '2006-02-26',
            'img' => 'img/avatares/avatar-two.png',
            'created_at' => '2023-08-15',
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'id_type' => 2,
            'id_supervisor' => 1,
            'name' => 'Cristiny',
            'lastname' => 'Orleans',
            'username' => '@cris',
            'email' => 'cris@gmail.com',
            'password' => Hash::make('12345678'),
            'birthday' => '2002-05-22',
            'img' => 'img/avatares/avatar-four.png',
            'created_at' => '2023-08-15',
            'updated_at' => Carbon::now()
        ]);

        //Vitima
        DB::table('users')->insert([
            'id_type' => 1,
            'id_device' => 1,
            'name' => 'Mariane',
            'lastname' => 'Souza',
            'username' => '@mari',
            'email' => 'mari@gmail.com',
            'password' => Hash::make('12345678'),
            'message' => 'Socorro! Preciso de ajuda!',
            'birthday' => '2004-04-04',
            'img' => 'img/avatares/avatar-three.png',
            'created_at' => '2023-08-15',
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'id_type' => 1,
            'id_device' => 2,
            'name' => 'Ana',
            'lastname' => 'Lima',
            'username' => '@najuju',
            'email' => 'ana@gmail.com',
            'password' => Hash::make('12345678'),
            'message' => 'Socorro! Preciso de ajuda!',
            'birthday' => '2006-02-27',
            'img' => 'img/avatares/avatar-four.png',
            'created_at' => '2023-08-15',
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'id_type' => 1,
            'id_device' => 3,
            'name' => 'Nair',
            'lastname' => 'Santos',
            'username' => '@nair',
            'email' => 'nair@gmail.com',
            'password' => Hash::make('12345678'),
            'message' => 'Socorro! Preciso de ajuda!',
            'birthday' => '2000-07-05',
            'img' => 'img/avatares/avatar-one.png',
            'created_at' => '2023-08-15',
            'updated_at' => Carbon::now()
        ]);
    }
}
