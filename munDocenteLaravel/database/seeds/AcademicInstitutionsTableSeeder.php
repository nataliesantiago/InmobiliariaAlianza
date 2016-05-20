<?php

use Illuminate\Database\Seeder;

class AcademicInstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('academic_institutions')->insert([
            'name' => 'UNIVERSIDAD PEDAGÓGICA Y TECNOLÓGICA DE COLOMBIA',
            'email' => 'uptc@uptc.edu.co',
            'phone' => '7765456',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'place' => 3,
            'type' => 1,
        ]);
        DB::table('academic_institutions')->insert([
            'name' => 'UNIVERSIDAD NACIONAL',
            'email' => 'unal@unal.edu.co',
            'phone' => '2223256',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'place' => 5,
            'type' => 1,
        ]);
        DB::table('academic_institutions')->insert([
            'name' => 'SENA',
            'email' => 'sena@sena.edu.co',
            'phone' => '776234215',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'place' => 5,
            'type' => 3,
        ]);
        DB::table('academic_institutions')->insert([
            'name' => 'INSTITUCIÓN EDUCATIVA DE COLOMBIA',
            'email' => 'iec@eic.edu.co',
            'phone' => '773123122',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'place' => 3,
            'type' => 1,
        ]);
        DB::table('academic_institutions')->insert([
            'name' => 'UNIVERSIDAD DE BOYACÁ',
            'email' => 'uniboyaca@uniboy.edu.co',
            'phone' => '3123312',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'place' => 3,
            'type' => 2,
        ]);
        DB::table('academic_institutions')->insert([
            'name' => 'UNIVERSIDAD INSDUSTRIAL DE SANTANDER',
            'email' => 'uis@uis.edu.co',
            'phone' => '315312321',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'place' => 7,
            'type' => 1,
        ]);
        DB::table('academic_institutions')->insert([
            'name' => 'UNIVERSIDAD DE ANTIOQUÍA',
            'email' => 'ua@ua.edu.co',
            'phone' => '7762345',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'place' => 9,
            'type' => 1,
        ]);
        DB::table('academic_institutions')->insert([
            'name' => 'UNIVERSIDAD TECNOLÓGICA DE PEREIRA',
            'email' => 'utp@utp.edu.co',
            'phone' => '776123122',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'place' => 15,
            'type' => 1,
        ]);
        DB::table('academic_institutions')->insert([
            'name' => 'UNIVERSIDAD DEL CALDAS',
            'email' => 'ucaldas@ucaldas.edu.co',
            'phone' => '8781500',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'place' => 11,
            'type' => 1,
        ]);
        DB::table('academic_institutions')->insert([
            'name' => 'UNIVERSIDAD DE MEDELLIN',
            'email' => 'udem@udem.edu.co',
            'phone' => '3405555',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'place' => 9,
            'type' => 1,
        ]);
         DB::table('academic_institutions')->insert([
            'name' => 'UNIVERSIDAD EAFIT',
            'email' => 'contacto@eafit.edu.co',
            'phone' => '4489500',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'place' => 9,
            'type' => 1,
        ]);
    }
}
