<?php

use Illuminate\Database\Seeder;

class TypeOfScientificMagazinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_of_scientific_magazines')->insert([
        	'value' => 'A1',	
        ]);
        DB::table('type_of_scientific_magazines')->insert([
        	'value' => 'A2',	
        ]);
        DB::table('type_of_scientific_magazines')->insert([
        	'value' => 'B',	
        ]);
        DB::table('type_of_scientific_magazines')->insert([
        	'value' => 'C',	
        ]);
        DB::table('type_of_scientific_magazines')->insert([
        	'value' => 'SIN CATEGORIA',	
        ]);
    }
}
