<?php

use Illuminate\Database\Seeder;

class TypeOfMundocenteUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_of_mundocente_users')->insert([
            'value' => 'DOCENTE',
        ]);
        DB::table('type_of_mundocente_users')->insert([
            'value' => 'PUBLICADOR',
        ]);
        DB::table('type_of_mundocente_users')->insert([
            'value' => 'ADMINISTRADOR',
        ]);
    }
}
