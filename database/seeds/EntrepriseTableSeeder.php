<?php

use Illuminate\Database\Seeder;

class EntrepriseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entreprises')->insert([
            
            'nom' => "Coca-Cola",
            'email' => 'coca-cola-off@gmail.com',
            'date' => '1998',
            'numero' => '02453576764',
            'tva' => 'BE 0123.456.789',
            'adresse' => '99, rue des Dunes 35400 SAINT-MALO',
            'domaine' => 'Développement',
            'logo' => 'LOGO',
            'pNom' => 'Jean',
            'pTel' => '4567890',
            'valid' => 0,
            'role_id' => 5,
            'password' => Hash::make('popo1234'),
        ]);
    }
}
