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
        	'value' => 'B1',	
        ]);
        DB::table('type_of_scientific_magazines')->insert([
        	'value' => 'B2',	
        ]);
        DB::table('type_of_scientific_magazines')->insert([
        	'value' => 'B3',	
        ]);
        DB::table('type_of_scientific_magazines')->insert([
        	'value' => 'B4',	
        ]);
        DB::table('type_of_scientific_magazines')->insert([
        	'value' => 'C1',	
        ]);
        DB::table('type_of_scientific_magazines')->insert([
        	'value' => 'C2',	
        ]);
        DB::table('type_of_scientific_magazines')->insert([
        	'value' => 'C3',	
        ]);
        DB::table('type_of_scientific_magazines')->insert([
        	'value' => 'D1',	
        ]);
        DB::table('type_of_scientific_magazines')->insert([
        	'value' => 'EX1',	
        ]);
        DB::table('type_of_scientific_magazines')->insert([
        	'value' => 'EX2',	
        ]);
        DB::table('type_of_scientific_magazines')->insert([
        	'value' => 'SIN CATEGORIA',	
        ]);
    }
}
