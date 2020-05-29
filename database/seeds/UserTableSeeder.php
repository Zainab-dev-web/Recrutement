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
        $filename = Str::random(10) . time() . '.jpeg';
        Storage::disk('public')->copy('/images.jpeg', $filename);
        DB::table('users')->insert([
            'nom' => 'Admin',
            'prénom' => null,
            'date' => null,
            'tva' => null,
            'logo' => null,
            'pNom' => null,
            'pTel' => null,
            'photo' => $filename,
            'email' => 'admin@admin',
            'numero' => '0486573322',
            'adresse' => 'Rue des arbres, 45',
            'statut_id' => null,
            'véhicule' => 'Oui',
            'dispo' => null,
            'domaine' => 'Gestionnaire du site',
            'cv' => null,
            'valid' => 1,
            'role_id' => 1,
            'password' => Hash::make('123456789'),
            'resultat_id' => null,
        ]);
        // entreprise
        $filename = Str::random(10) . time() . '.jpg';
        Storage::disk('public')->copy('/tom&co.jpg', $filename);
        DB::table('users')->insert([
            'nom' => 'Tom&Co',
            'prénom' => null,
            'véhicule' => null,
            'dispo' => null,
            'date' => '2020-05-22',
            'tva' => 'BE 56478967',
            'domaine' => 'Animalier',
            'numero' => '0435678909',
            'adresse' => 'Rue de la haute',
            'logo' => null,
            'photo' =>$filename,
            'pNom' => 'Patrick',
            'pTel' => '0454678697',
            'email' => 'patricklepont@gmail.com',
            'valid' => 1,
            'role_id' => 5,
            'statut_id' => null,
            'password' => Hash::make('popo1234'),
            'resultat_id' => null,
        ]);
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/amazon.png', $filename);
        DB::table('users')->insert([
            'nom' => 'Amazon',
            'prénom' => null,
            'véhicule' => null,
            'dispo' => null,
            'date' => '2020-05-22',
            'tva' => 'BE 56478967',
            'domaine' => 'Numérique',
            'numero' => '0435678909',
            'adresse' => 'Rue de la haute',
            'logo' => null,
            'photo' =>$filename,
            'pNom' => 'Patrick',
            'pTel' => '0454678697',
            'email' => 'entreprise@gmail.com',
            'valid' => 1,
            'role_id' => 5,
            'statut_id' => null,
            'password' => Hash::make('popo1234'),
            'resultat_id' => null,
        ]);
        $filename = Str::random(10) . time() . '.jpeg';
        Storage::disk('public')->copy('/images.jpeg', $filename);
        DB::table('users')->insert([
            'nom' => 'Stoller',
            'prénom' => 'Shannon',
            'date' => null,
            'tva' => null,
            'logo' =>null,
            'pNom' => null,
            'pTel' => null,
            'photo' => $filename,
            'email' => 'stoshannon@gmail.com',
            'numero' => '0486573322',
            'adresse' => 'Rue des Archers, 45',
            'statut_id' => 1,
            'véhicule' => 'Non',
            'dispo' => '2020-07-01',
            'domaine' => 'Back-End',
            'cv' => 'cv.jpg',
            'valid' => 1,
            'role_id' => 4,
            'password' => Hash::make('popo1234'),
            'resultat_id' => null,
        ]);
        $filename = Str::random(10) . time() . '.jpeg';
        Storage::disk('public')->copy('/images.jpeg', $filename);
        DB::table('users')->insert([
            'nom' => 'Zainab',
            'prénom' => 'Zainab',
            'date' => null,
            'tva' => null,
            'logo' =>null,
            'pNom' => null,
            'pTel' => null,
            'photo' => $filename,
            'email' => 'zainab@gmail.com',
            'numero' => '0486573322',
            'adresse' => 'Rue des tests, 45',
            'statut_id' => 1,
            'véhicule' => 'Non',
            'dispo' => '2020-06-18',
            'domaine' => 'Web-designer',
            'cv' => 'cv.jpg',
            'valid' => 1,
            'role_id' => 4,
            'password' => Hash::make('popo1234'),
            'resultat_id' => null,
        ]);
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/images.png', $filename);
        DB::table('users')->insert([
            'nom' => 'Yonte Montero',
            'prénom' => 'Salome',
            'date' => null,
            'tva' => null,
            'logo' =>null,
            'pNom' => null,
            'pTel' => null,
            'photo' => $filename,
            'email' => 'mati@gmail.com',
            'numero' => '0486573322',
            'adresse' => 'Rue des matins, 45',
            'statut_id' => 1,
            'véhicule' => 'Non',
            'dispo' => '2020-05-30',
            'domaine' => 'Full-Stack',
            'cv' => 'cv.jpg',
            'valid' => 1,
            'role_id' => 4,
            'password' => Hash::make('popo1234'),
            'resultat_id' => null,
        ]);
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/images.png', $filename);
        DB::table('users')->insert([
            'nom' => 'Carla',
            'prénom' => 'Bast',
            'date' => null,
            'tva' => null,
            'logo' =>null,
            'pNom' => null,
            'pTel' => null,
            'photo' => $filename,
            'email' => 'hrt@gmail.com',
            'numero' => '0486573322',
            'adresse' => 'Rue des matins, 45',
            'statut_id' => 1,
            'véhicule' => 'Non',
            'dispo' => '2020-05-18',
            'domaine' => 'Full-Stack',
            'cv' => 'cv.jpg',
            'valid' => 1,
            'role_id' => 2,
            'password' => Hash::make('123456789'),
            'resultat_id' => null,
        ]);
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/images.png', $filename);
        DB::table('users')->insert([
            'nom' => 'Sebastien',
            'prénom' => 'Seb',
            'date' => null,
            'tva' => null,
            'logo' =>null,
            'pNom' => null,
            'pTel' => null,
            'photo' => $filename,
            'email' => 'hre@gmail.com',
            'numero' => '0486573322',
            'adresse' => 'Rue des matins, 45',
            'statut_id' => 1,
            'véhicule' => 'Non',
            'dispo' => '2020-05-18',
            'domaine' => 'Full-Stack',
            'cv' => 'cv.jpg',
            'valid' => 1,
            'role_id' => 3,
            'password' => Hash::make('123456789'),
            'resultat_id' => null,
        ]);
        $filename = Str::random(10) . time() . '.png';
        Storage::disk('public')->copy('/kruidvat.png', $filename);
        DB::table('users')->insert([
            'nom' => 'Kruidvat',
            'prénom' => null,
            'date' => null,
            'tva' => null,
            'logo' =>null,
            'pNom' => null,
            'pTel' => null,
            'photo' => $filename,
            'email' => 'kruidvat@gmail.com',
            'numero' => '0486653282',
            'adresse' => 'Rue des orées, 71',
            'statut_id' => 1,
            'véhicule' => 'Non',
            'dispo' => '2020-05-18',
            'domaine' => 'Full-Stack',
            'cv' => 'cv.jpg',
            'valid' => 1,
            'role_id' => 5,
            'password' => Hash::make('123456789'),
            'resultat_id' => null,
        ]);
        $filename = Str::random(10) . time() . '.jpg';
        Storage::disk('public')->copy('/proximus.jpg', $filename);
        DB::table('users')->insert([
            'nom' => 'Proximus',
            'prénom' => null,
            'date' => null,
            'tva' => null,
            'logo' =>null,
            'pNom' => null,
            'pTel' => null,
            'photo' => $filename,
            'email' => 'proxi@gmail.com',
            'numero' => '0486573322',
            'adresse' => 'Rue des matins, 45',
            'statut_id' => 1,
            'véhicule' => 'Non',
            'dispo' => '2020-05-18',
            'domaine' => 'Full-Stack',
            'cv' => 'cv.jpg',
            'valid' => 1,
            'role_id' => 5,
            'password' => Hash::make('123456789'),
            'resultat_id' => null,
        ]);

        
    }
}
