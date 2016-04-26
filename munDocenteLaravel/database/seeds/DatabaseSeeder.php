<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeOfPlacesTableSeeder::class);
        $this->command->info('Tabla tipo de lugares llenada');

        $this->call(PlacesTableSeeder::class);
        $this->command->info('Tabla lugares llenada');

        $this->call(TypeOfAcademicInstitutionsTableSeeder::class);
        $this->command->info('Tabla tipo de instituciones academicas llenada');

        $this->call(AcademicInstitutionsTableSeeder::class);
        $this->command->info('Tabla instituciones academicas llenada');

        $this->call(AreasTableSeeder::class);
        $this->command->info('Tabla area llenada');

        $this->call(TypeOfMundocenteUsersTableSeeder::class);
        $this->command->info('Tabla tipo de usuarios mundocete llenada');

        $this->call(MundocenteUsersTableSeeder::class);
        $this->command->info('Tabla usuarios mundocete llenada');

        $this->call(TypeOfPublicationsTableSeeder::class);
        $this->command->info('Tabla tipo de publicaión llenada');

        $this->call(TypeOfScientificMagazinesTableSeeder::class);
        $this->command->info('Tabla tipo de revista cientifica llenada');

        $this->call(PublicationsTableSeeder::class);
        $this->command->info('Tabla publicaón llenada');
    }
}
