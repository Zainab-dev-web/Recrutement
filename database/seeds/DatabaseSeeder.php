<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(FonctionTableSeeder::class);
        $this->call(StatutTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PresenceTableSeeder::class);
        $this->call(NoteTableSeeder::class);
        $this->call(CategorieTableSeeder::class);
        $this->call(ChoixTableSeeder::class);
        $this->call(OffreTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(WorkTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(InfoTableSeeder::class);
        $this->call(ResultatTableSeeder::class);
    }
}
