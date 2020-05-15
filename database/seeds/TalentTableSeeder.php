<?php

use Illuminate\Database\Seeder;

class TalentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('talents')->insert([
            
            'nom' => "Stoller",
            'prénom' => "Shannon",
            'photo' => "non",
            'email' => 'coca-cola-off@gmail.com',
            'numero' => '02453576764',
            'adresse' => '99, rue des Dunes 35400 SAINT-MALO',
            'véhicule' => "non",
            'dispo' => "oui",
            'domaine' => 'Web Development',
            'cv' => 'stv',
            'satut_id' => 1,
            'valid' => 1,
            'role_id' => 4,
            'password' => Hash::make('popo1234'),
        ]);

        DB::table('talents')->insert([
            
            'nom' => "Fahem",
            'prénom' => "Zaïnab",
            'photo' => "nope",
            'email' => 'stop-isma@gmail.com',
            'numero' => '0478576764',
            'adresse' => '99, rue des Thunes 35400 SAINT-MALO',
            'véhicule' => "oui",
            'dispo' => "non",
            'domaine' => 'IA Technology',
            'cv' => 'nope',
            'satut_id' => 2,
            'valid' => 1,
            'role_id' => 4,
            'password' => Hash::make('zainab'),
        ]);

        DB::table('talents')->insert([
            
            'nom' => "Yonte Montero",
            'prénom' => "Salome",
            'photo' => "ptet",
            'email' => 'ousti@gmail.com',
            'numero' => '063576764',
            'adresse' => '99, rue des Punes 35400 SAINT-MALO',
            'véhicule' => "non",
            'dispo' => "oui",
            'domaine' => 'Graphic Design',
            'cv' => 'oui oui',
            'satut_id' => 1,
            'valid' => 1,
            'role_id' => 4,
            'password' => Hash::make('ouisti'),
        ]);
    }
}
