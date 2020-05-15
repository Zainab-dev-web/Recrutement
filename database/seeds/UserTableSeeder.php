<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // entreprise
        DB::table('users')->insert([
            'nom' => 'Tom&Co',
            'prénom' => null,
            'véhicule' => null,
            'dispo' => null,
            'date' => '2020-05-22',
            'tva' => 'BE 56478967',
            'domaine' => 'Alimentaire',
            'numero' => '0435678909',
            'adresse' => 'Rue de la haute',
            'logo' => '0AFDtr6UjnOCG4zx3Cqpb3udapzZ5V5DY8F8nKhp.png',
            'pNom' => 'Patrick',
            'pTel' => '0454678697',
            'email' => 'patricklepont@gmail.com',
            'valid' => 1,
            'role_id' => 5,
            'statut_id' => null,
            'password' => Hash::make('popo1234'),
        ]);

        DB::table('users')->insert([
            'nom' => 'Stoller',
            'prénom' => 'Shannon',
            'date' => null,
            'tva' => null,
            'logo' => null,
            'pNom' => null,
            'pTel' => null,
            'photo' => '1EN1Iy3UGGnzyPNi08CKu8NHQvySien2HhDLRBhO.png',
            'email' => 'stoshannon@gmail.com',
            'numero' => '0486573322',
            'adresse' => 'Rue des Archers, 45',
            'statut_id' => 1,
            'véhicule' => 'Non',
            'dispo' => '2020-05-18',
            'domaine' => 'Informatique',
            'cv' => null,
            'valid' => 1,
            'role_id' => 4,
            'password' => Hash::make('popo1234'),
        ]);
    }
}
