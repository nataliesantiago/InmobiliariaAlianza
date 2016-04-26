<?php

use Illuminate\Database\Seeder;

class MundocenteUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mundocente_users')->insert([
            'username' => 'PepitoPerez',
            'password' => 'miPassword',
            'fullname' => 'Pedro Jimenez Perez',
            'email' => 'pedrito@hotmail.com',
            'academic_institution' => 1,
            'type' => 2,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'JuanMore2',
            'password' => '123x100pre',
            'fullname' => 'Juan Andres Moreno Torres',
            'email' => 'jauni@gmail.com',
            'academic_institution' => 9,
            'type' => 2,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'MariSol',
            'password' => 'iloveyou',
            'fullname' => 'Marisol Mercado Rodriguez',
            'email' => 'mari@outlook.com',
            'academic_institution' => 7,
            'type' => 2,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'Juani',
            'password' => 'cc430212021',
            'fullname' => 'Juana Indis Macareno',
            'email' => 'juani@hotmail.com',
            'academic_institution' => 3,
            'type' => 2,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'Dani33',
            'password' => 'noolvidar',
            'fullname' => 'Danilo José Puierto Triungo',
            'email' => 'dani@hotmail.com',
            'academic_institution' => 4,
            'type' => 2,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'Dieguit2',
            'password' => 'ilovescrum',
            'fullname' => 'Diego Escobar Gaviria',
            'email' => 'armando@gmail.com',
            'academic_institution' => 8,
            'type' => 2,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'Jj',
            'password' => 'soyrajon',
            'fullname' => 'Juan Jose Camargo',
            'email' => 'pjj@outlook.com',
            'academic_institution' => 2,
            'type' => 2,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'Nestor123',
            'password' => '987654321',
            'fullname' => 'Nestor Felipe Fuzme Carrillo',
            'email' => 'carii@yahoo.com',
            'academic_institution' => 5,
            'type' => 2,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'Mile99',
            'password' => 'mundocente',
            'fullname' => 'Milena de los Rios',
            'email' => 'mile1321@hotmail.com',
            'academic_institution' => 10,
            'type' => 2,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'Apa33',
            'password' => '420xever',
            'fullname' => 'Aparicio Hernández',
            'email' => 'apa420@gmail.com',
            'academic_institution' => 6,
            'type' => 2,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'Juan23',
            'password' => 'juan123x',
            'fullname' => 'Juan Martinez',
            'email' => 'juan.martinez@gmail.com',
            'academic_institution' => 6,
            'type' => 1,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'Andrea',
            'password' => 'adreita89',
            'fullname' => 'Andrea Perez',
            'email' => 'andrea89@hotmail.com',
            'academic_institution' => 2,
            'type' => 1,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'MariaS',
            'password' => '407582',
            'fullname' => 'Maria Sandoval',
            'email' => 'maria_s@gmail.com',
            'academic_institution' => 7,
            'type' => 1,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'Pedro53',
            'password' => '7654se',
            'fullname' => 'Pedro Alvarez',
            'email' => 'pedro53_alv@gmail.com',
            'academic_institution' => 6,
            'type' => 1,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'Daniel',
            'password' => 'danielito12',
            'fullname' => 'Daniel Felipe Sanchez',
            'email' => 'df_s@hotmail.com',
            'academic_institution' => 3,
            'type' => 1,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'DanielaA',
            'password' => '6723daa',
            'fullname' => 'Daniela Albarracin',
            'email' => 'daniela_6723@gmail.com',
            'academic_institution' => 8,
            'type' => 1,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'Esperanza',
            'password' => 'esperanza12E',
            'fullname' => 'Esperanza Escobar',
            'email' => 'ee12@gmail.com',
            'academic_institution' => 10,
            'type' => 1,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'Fanny',
            'password' => 'fanny77',
            'fullname' => 'Fanny Ramirez',
            'email' => 'fanny77_r@hotmail.com',
            'academic_institution' => 10,
            'type' => 1,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'Esteban',
            'password' => 'xeste13x',
            'fullname' => 'Esteban Martinez',
            'email' => 'esteban-m.13@hotmail.com',
            'academic_institution' => 2,
            'type' => 1,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'AndresM_87',
            'password' => 'm87andres',
            'fullname' => 'Andres Moreno',
            'email' => 'andresito.more@gmail.com',
            'academic_institution' => 1,
            'type' => 1,
        ]);
        DB::table('mundocente_users')->insert([
            'username' => 'JuanR',
            'password' => 'juanr24',
            'fullname' => 'Juan Rodriguez',
            'email' => 'juan24_r@hotmail.com',
            'academic_institution' => 10,
            'type' => 1,
        ]);
    }
}
