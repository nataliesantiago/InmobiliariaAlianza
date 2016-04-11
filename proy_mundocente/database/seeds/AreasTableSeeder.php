<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'name' => 'CIENCIAS PURAS',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
        ]);
        DB::table('areas')->insert([
            'name' => 'FÍSICA',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 1,
        ]);
        DB::table('areas')->insert([
            'name' => 'BIOLOGÍA',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 1,
        ]);
        DB::table('areas')->insert([
            'name' => 'MATEMÁTICAS',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 1,
        ]);
        DB::table('areas')->insert([
            'name' => 'QUÍMICA',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 1,
        ]);
        DB::table('areas')->insert([
            'name' => 'FILOSOFÍA',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 1,
        ]);
        DB::table('areas')->insert([
            'name' => 'CIENCIAS DE LA EDUCACIÓN',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
        ]);
        DB::table('areas')->insert([
            'name' => 'LICENCIATURA EN INFORMÁTICA Y TECNOLOGÍA',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 7,
        ]);
        DB::table('areas')->insert([
            'name' => 'LICENCIATURA EN CIENCIAS SOCIALES',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 7,
        ]);
        DB::table('areas')->insert([
            'name' => 'LICENCIATURA EN MATEMÁTICAS',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 7,
        ]);
        DB::table('areas')->insert([
            'name' => 'CIENCIAS DE LA SALUD',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
        ]);
        DB::table('areas')->insert([
            'name' => 'MEDICINA',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 11,
        ]);
        DB::table('areas')->insert([
            'name' => 'PSICOLOGÍA',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 11,
        ]);
        DB::table('areas')->insert([
            'name' => 'SALUD OCUPACIONAL Y PREVENCIÓN DE RIESGOS',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 11,
        ]);
        DB::table('areas')->insert([
            'name' => 'CIENCIAS ECONÓMICAS Y ADMINISTRATIVAS',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
        ]);
        DB::table('areas')->insert([
            'name' => 'ECNONOMÍA',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 15,
        ]);
        DB::table('areas')->insert([
            'name' => 'ADMINISTRACIÓN DE EMPRESAS',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 15,
        ]);
        DB::table('areas')->insert([
            'name' => 'CONTADURÍA PÚBLICA',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 15,
        ]);
        DB::table('areas')->insert([
            'name' => 'DERECHO Y CIENCIAS SOCIALES',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
        ]);
        DB::table('areas')->insert([
            'name' => 'DERECHO',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 19,
        ]);
        DB::table('areas')->insert([
            'name' => 'INGENIERÍA',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
        ]);
        DB::table('areas')->insert([
            'name' => 'INGENIERÍA CIVIL',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 21,
        ]);
        DB::table('areas')->insert([
            'name' => 'INGENIERÍA DE SISTEMAS Y COMPUTACIÓN',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 21,
        ]);
        DB::table('areas')->insert([
            'name' => 'INGENIERÍA AMBIENTAL',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 21,
        ]);
    }
}
