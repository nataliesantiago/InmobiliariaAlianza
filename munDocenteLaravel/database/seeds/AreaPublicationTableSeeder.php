<?php

use Illuminate\Database\Seeder;

class AreaPublicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('area_publication')->insert([
            'area_id' => 1,
            'publication_id' => 1,
        ]);

        DB::table('area_publication')->insert([
            'area_id' => 10,
            'publication_id' => 2,
        ]);

        DB::table('area_publication')->insert([
        	'area_id' => 9,
            'publication_id' => 3,
        ]);

        DB::table('area_publication')->insert([
            'area_id' => 1,
            'publication_id' => 4,
        ]);

        DB::table('area_publication')->insert([
            'area_id' => 1,
            'publication_id' => 5,
        ]);

        DB::table('area_publication')->insert([
            'area_id' => 63,
            'publication_id' => 6,
        ]);


        DB::table('area_publication')->insert([
            'area_id' => 6,
            'publication_id' => 7,
        ]);

        DB::table('area_publication')->insert([
            'area_id' => 11,
            'publication_id' => 8,
        ]);

        DB::table('area_publication')->insert([
            'area_id' => 12,
            'publication_id' => 9,
        ]);

        DB::table('area_publication')->insert([
            'area_id' => 10,
            'publication_id' => 10,
        ]);

        DB::table('area_publication')->insert([
            'area_id' => 1,
            'publication_id' => 11,
        ]);

        DB::table('area_publication')->insert([
            'area_id' => 30,
            'publication_id' => 12,
        ]);

        DB::table('area_publication')->insert([
            'area_id' => 11,
            'publication_id' => 13,
        ]);

        DB::table('area_publication')->insert([
            'area_id' => 18,
            'publication_id' => 14,
        ]);

        DB::table('area_publication')->insert([
            'area_id' => 10,
            'publication_id' => 15,
        ]);

        DB::table('area_publication')->insert([
            'area_id' => 30,
            'publication_id' => 16,
        ]);

    }
}
