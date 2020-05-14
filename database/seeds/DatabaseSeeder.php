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
        // $this->call(UserSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(FonctionTableSeeder::class);
        $this->call(StatutTableSeeder::class);
        $this->call(PresenceTableSeeder::class);
        $this->call(NoteTableSeeder::class);
        $this->call(CategorieTableSeeder::class);
        
    }
}
