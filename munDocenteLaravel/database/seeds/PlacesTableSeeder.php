<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
            'name' => 'COLOMBIA',
            'type' => 3,
        ]);
        DB::table('places')->insert([
            'name' => 'BOYACÁ',
            'type' => 2,
            'parent' => 1,
        ]);
        DB::table('places')->insert([
            'name' => 'TUNJA',
            'type' => 1,
            'parent' => 2,
        ]);
        DB::table('places')->insert([
            'name' => 'CUNDINAMARCA',
            'type' => 2,
            'parent' => 1,
        ]);
        DB::table('places')->insert([
            'name' => 'BOGOTÁ D.C.',
            'type' => 1,
            'parent' => 4,
        ]);
        DB::table('places')->insert([
            'name' => 'SANTANDER',
            'type' => 2,
            'parent' => 1,
        ]);
        DB::table('places')->insert([
            'name' => 'BUCARAMANGA',
            'type' => 1,
            'parent' => 6,
        ]);
        DB::table('places')->insert([
            'name' => 'ANTIOQUÍA',
            'type' => 2,
            'parent' => 1,
        ]);
        DB::table('places')->insert([
            'name' => 'MEDELLIN',
            'type' => 1,
            'parent' => 8,
        ]);
        DB::table('places')->insert([
            'name' => 'CALDAS',
            'type' => 2,
            'parent' => 1,
        ]);
        DB::table('places')->insert([
            'name' => 'MANIZALES',
            'type' => 1,
            'parent' => 10,
        ]);
        DB::table('places')->insert([
            'name' => 'CÓRDOBA',
            'type' => 2,
            'parent' => 1,
        ]);
        DB::table('places')->insert([
            'name' => 'MONTERIA',
            'type' => 1,
            'parent' => 12,
        ]);
        DB::table('places')->insert([
            'name' => 'RISARALDA',
            'type' => 2,
            'parent' => 1,
        ]);
        DB::table('places')->insert([
            'name' => 'PEREIRA',
            'type' => 1,
            'parent' => 14,
        ]);
        DB::table('places')->insert([
            'name' => 'VALLE DEL CAUCA',
            'type' => 2,
            'parent' => 1,
        ]);
        DB::table('places')->insert([
            'name' => 'POPAYÁN',
            'type' => 1,
            'parent' => 16,
        ]);
    }
}
