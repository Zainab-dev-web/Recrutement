<?php

use Illuminate\Database\Seeder;

class FonctionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fonctions')->insert([
            
            'fonction' => 'Membre Principal',
            
        ]);
        DB::table('fonctions')->insert([
            
            'fonction' => 'Membre Secondaire',
            
        ]);
    }
}
