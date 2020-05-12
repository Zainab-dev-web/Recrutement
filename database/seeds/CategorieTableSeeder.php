<?php

use Illuminate\Database\Seeder;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            
            'categorie' => "Entreprise",
            
        ]);
        DB::table('categories')->insert([
            
            'categorie' => "Talent Chercheur d'emploi",
            
        ]);
        DB::table('categories')->insert([
            
            'categorie' => "Talent Etudiant",
            
        ]);
    }
}
