<?php

use Illuminate\Database\Seeder;

class TypeOfPlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_of_places')->insert([
            'value' => 'CIUDAD',
        ]);
        DB::table('type_of_places')->insert([
            'value' => 'DEPARTAMENTO',
        ]);
        DB::table('type_of_places')->insert([
            'value' => 'PAIS',
        ]);
    }
}
