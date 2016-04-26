<?php

use Illuminate\Database\Seeder;

class TypeOfAcademicInstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('type_of_academic_institutions')->insert([
            'value' => 'UNIVERSIDAD PÚBLICA',
        ]);
        DB::table('type_of_academic_institutions')->insert([
            'value' => 'UNIVERSIDAD PRIVADA',
        ]);
        DB::table('type_of_academic_institutions')->insert([
            'value' => 'INSTITUCIÓN PÚBLICA',
        ]);
        DB::table('type_of_academic_institutions')->insert([
            'value' => 'INSTITUCIÓN PRIVADA',
        ]);
    }
}
