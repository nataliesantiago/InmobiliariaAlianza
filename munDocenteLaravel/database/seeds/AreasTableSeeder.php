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
            'name' => 'Todas',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
        ]);
        DB::table('areas')->insert([
            'name' => 'Ciencias básicas y naturales',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 1,
        ]);
        DB::table('areas')->insert([
            'name' => 'Matemáticas',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 2,
        ]);
        DB::table('areas')->insert([
            'name' => 'Estadística',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 2,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ciencias físicas',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 2,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ciencias químicas',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 2,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ciencias de la tierra y medioambientales',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 2,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ciencias biológicas',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 2,
        ]);
        DB::table('areas')->insert([
            'name' => 'Otras ciencias naturales',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 2,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ingeniería y tecnología',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 1,
        ]);
        DB::table('areas')->insert([
            'name' => 'Computación, sistemas, informática y ciencias de la información',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Biotecnología ambiental',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Bitecnología industrial',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Nanotecnología',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ingeniería agronómica y agroambiental',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ingeniería ambiental y sanitaria',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ingeniería médica y biomédica',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ingeniería civil',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ingeniería de alimentos',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ingeniería de minas y geológica',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ingeniería de petróleos',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ingeniería de telecomunicaciones o telemática',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ingeniería de transportes y vías',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ingeniería geomática y topografía',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ingeniería industrial y de producción',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ingeniería eléctrica, electrónica, electromecánica, mecánica y mecatrónica',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ingeniería metalúrgica y de los materiales',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ingeniería química',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Otras ingenierías y tecnologías',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 10,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ciencias médicas y de la salud',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 1,
        ]);
        DB::table('areas')->insert([
            'name' => 'Medicina básica',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 30,
        ]);
        DB::table('areas')->insert([
            'name' => 'Medicina clínica',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 30,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ciencias de la salud',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 30,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ciencias forenses',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 30,
        ]);
        DB::table('areas')->insert([
            'name' => 'Deporte y recreación',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 30,
        ]);
        DB::table('areas')->insert([
            'name' => 'Biotecnología en salud',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 30,
        ]);
        DB::table('areas')->insert([
            'name' => 'Otras ciencias médicas',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 30,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ciencias agrícolas y agropecuarias',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
        ]);
        DB::table('areas')->insert([
            'name' => 'Agricultura, cilvicultura y pesca',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 38,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ciencias animales y lechería',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 38,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ciencias veterinarias',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 38,
        ]);
        DB::table('areas')->insert([
            'name' => 'Biotecnología agrícola',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 38,
        ]);
        DB::table('areas')->insert([
            'name' => 'Otras ciencias agrícolas',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 38,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ciencias sociales',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
        ]);
        DB::table('areas')->insert([
            'name' => 'Psicología',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 44,
        ]);
        DB::table('areas')->insert([
            'name' => 'Economía, administración y negocios',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 44,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ciencias de la educación',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 44,
        ]);
        DB::table('areas')->insert([
            'name' => 'Sociología',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 44,
        ]);
        DB::table('areas')->insert([
            'name' => 'Derecho',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 44,
        ]);
        DB::table('areas')->insert([
            'name' => 'Ciencias políticas',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 44,
        ]);
        DB::table('areas')->insert([
            'name' => 'Gastronomía y culinaria',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 44,
        ]);
        DB::table('areas')->insert([
            'name' => 'Geografía social y económica',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 44,
        ]);
        DB::table('areas')->insert([
            'name' => 'Periodismo y comunicaciones',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 44,
        ]);
        DB::table('areas')->insert([
            'name' => 'Otras ciencias sociales',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 44,
        ]);
        DB::table('areas')->insert([
            'name' => 'Humanidades',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
        ]);
        DB::table('areas')->insert([
            'name' => 'Historia y arqueología',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 55,
        ]);
        DB::table('areas')->insert([
            'name' => 'Antropología',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 55,
        ]);
        DB::table('areas')->insert([
            'name' => 'Idiomas y literatura',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 55,
        ]);
        DB::table('areas')->insert([
            'name' => 'Filosofía',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 55,
        ]);
        DB::table('areas')->insert([
            'name' => 'Otras historias',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 55,
        ]);
        DB::table('areas')->insert([
            'name' => 'Otras humanidades',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 55,
        ]);
        DB::table('areas')->insert([
            'name' => 'Arte y diseño',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
        ]);
        DB::table('areas')->insert([
            'name' => 'Arquitectura',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 63,
        ]);
        DB::table('areas')->insert([
            'name' => 'Diseño',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 63,
        ]);
        DB::table('areas')->insert([
            'name' => 'Arte',
            'description' => 'lorem ipsum lorem ipsum lorem ipsum ..... ',
            'parent' => 63,
        ]);
    }
}
