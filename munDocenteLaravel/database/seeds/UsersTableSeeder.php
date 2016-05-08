<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => bcrypt('adminMunDocente'),
            'fullname' => 'Administrador',
            'email' => 'alvarohernandezmillan11@gmail.com',
            'academic_institution' => 1,
            'type' => 3,
        ]);
        DB::table('users')->insert([
            'username' => 'PepitoPerez',
            'password' => bcrypt('miPassword'),
            'fullname' => 'Pedro Jimenez Perez',
            'email' => 'pedrito@hotmail.com',
            'academic_institution' => 1,
            'type' => 2,
        ]);
        DB::table('users')->insert([
            'username' => 'JuanMore2',
            'password' => bcrypt('123x100pre'),
            'fullname' => 'Juan Andres Moreno Torres',
            'email' => 'jauni@gmail.com',
            'academic_institution' => 9,
            'type' => 2,
        ]);
        DB::table('users')->insert([
            'username' => 'MariSol',
            'password' => bcrypt('iloveyou'),
            'fullname' => 'Marisol Mercado Rodriguez',
            'email' => 'mari@outlook.com',
            'academic_institution' => 7,
            'type' => 2,
        ]);
        DB::table('users')->insert([
            'username' => 'Juani',
            'password' => bcrypt('cc430212021'),
            'fullname' => 'Juana Indis Macareno',
            'email' => 'juani@hotmail.com',
            'academic_institution' => 3,
            'type' => 2,
        ]);
        DB::table('users')->insert([
            'username' => 'Dani33',
            'password' => bcrypt('noolvidar'),
            'fullname' => 'Danilo José Puierto Triungo',
            'email' => 'dani@hotmail.com',
            'academic_institution' => 4,
            'type' => 2,
        ]);
        DB::table('users')->insert([
            'username' => 'Dieguit2',
            'password' => bcrypt('ilovescrum'),
            'fullname' => 'Diego Escobar Gaviria',
            'email' => 'armando@gmail.com',
            'academic_institution' => 8,
            'type' => 2,
        ]);
        DB::table('users')->insert([
            'username' => 'Jj',
            'password' => bcrypt('soyrajon'),
            'fullname' => 'Juan Jose Camargo',
            'email' => 'pjj@outlook.com',
            'academic_institution' => 2,
            'type' => 2,
        ]);
        DB::table('users')->insert([
            'username' => 'Nestor123',
            'password' => bcrypt('987654321'),
            'fullname' => 'Nestor Felipe Fuzme Carrillo',
            'email' => 'carii@yahoo.com',
            'academic_institution' => 5,
            'type' => 2,
        ]);
        DB::table('users')->insert([
            'username' => 'Mile99',
            'password' => bcrypt('mundocente'),
            'fullname' => 'Milena de los Rios',
            'email' => 'mile1321@hotmail.com',
            'academic_institution' => 10,
            'type' => 2,
        ]);
        DB::table('users')->insert([
            'username' => 'Apa33',
            'password' => bcrypt('420xever'),
            'fullname' => 'Aparicio Hernández',
            'email' => 'apa420@gmail.com',
            'academic_institution' => 6,
            'type' => 2,
        ]);
        DB::table('users')->insert([
            'username' => 'Juan23',
            'password' => bcrypt('juan123x'),
            'fullname' => 'Juan Martinez',
            'email' => 'juan.martinez@gmail.com',
            'academic_institution' => 6,
            'type' => 1,
        ]);
        DB::table('users')->insert([
            'username' => 'Andrea',
            'password' => bcrypt('adreita89'),
            'fullname' => 'Andrea Perez',
            'email' => 'andrea89@hotmail.com',
            'academic_institution' => 2,
            'type' => 1,
        ]);
        DB::table('users')->insert([
            'username' => 'MariaS',
            'password' => bcrypt('407582'),
            'fullname' => 'Maria Sandoval',
            'email' => 'maria_s@gmail.com',
            'academic_institution' => 7,
            'type' => 1,
        ]);
        DB::table('users')->insert([
            'username' => 'Pedro53',
            'password' => bcrypt('7654se'),
            'fullname' => 'Pedro Alvarez',
            'email' => 'pedro53_alv@gmail.com',
            'academic_institution' => 6,
            'type' => 1,
        ]);
        DB::table('users')->insert([
            'username' => 'Daniel',
            'password' => bcrypt('danielito12'),
            'fullname' => 'Daniel Felipe Sanchez',
            'email' => 'df_s@hotmail.com',
            'academic_institution' => 3,
            'type' => 1,
        ]);
        DB::table('users')->insert([
            'username' => 'DanielaA',
            'password' => bcrypt('6723daa'),
            'fullname' => 'Daniela Albarracin',
            'email' => 'daniela_6723@gmail.com',
            'academic_institution' => 8,
            'type' => 1,
        ]);
        DB::table('users')->insert([
            'username' => 'Esperanza',
            'password' => bcrypt('esperanza12E'),
            'fullname' => 'Esperanza Escobar',
            'email' => 'ee12@gmail.com',
            'academic_institution' => 10,
            'type' => 1,
        ]);
        DB::table('users')->insert([
            'username' => 'Fanny',
            'password' => bcrypt('fanny77'),
            'fullname' => 'Fanny Ramirez',
            'email' => 'fanny77_r@hotmail.com',
            'academic_institution' => 10,
            'type' => 1,
        ]);
        DB::table('users')->insert([
            'username' => 'Esteban',
            'password' => bcrypt('xeste13x'),
            'fullname' => 'Esteban Martinez',
            'email' => 'esteban-m.13@hotmail.com',
            'academic_institution' => 2,
            'type' => 1,
        ]);
        DB::table('users')->insert([
            'username' => 'AndresM_87',
            'password' => bcrypt('m87andres'),
            'fullname' => 'Andres Moreno',
            'email' => 'andresito.more@gmail.com',
            'academic_institution' => 1,
            'type' => 1,
        ]);
        DB::table('users')->insert([
            'username' => 'JuanR',
            'password' => bcrypt('juanr24'),
            'fullname' => 'Juan Rodriguez',
            'email' => 'juan24_r@hotmail.com',
            'academic_institution' => 10,
            'type' => 1,
        ]);
    }
}
