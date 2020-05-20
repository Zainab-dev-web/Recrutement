<?php

use Illuminate\Database\Seeder;

class StatutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuts')->insert([
            
            'statut' => "Chercheur d'emploi",
            
        ]);
        DB::table('statuts')->insert([
            
            'statut' => "Demandeur de stage",
            
        ]);
    }
}
