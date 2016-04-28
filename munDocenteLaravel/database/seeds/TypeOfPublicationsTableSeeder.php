<?php

use Illuminate\Database\Seeder;

class TypeOfPublicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_of_publications')->insert([
            'value' => 'CONVOCATORIA DOCENTE',
        ]);
        DB::table('type_of_publications')->insert([
            'value' => 'REVISTA CIENTIFICA',
        ]);
        DB::table('type_of_publications')->insert([
            'value' => 'EVENTO ACADEMICO',
        ]);
   	}
}
