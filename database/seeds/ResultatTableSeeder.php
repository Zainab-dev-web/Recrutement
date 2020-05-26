<?php

use Illuminate\Database\Seeder;

class ResultatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resultats')->insert([
            
            'nom' => "Accepté",
            
        ]);

        DB::table('resultats')->insert([
            
            'nom' => "Refusé",
            
        ]);
    }
}
