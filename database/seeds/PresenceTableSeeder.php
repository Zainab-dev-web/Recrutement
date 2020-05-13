<?php

use Illuminate\Database\Seeder;

class PresenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('presences')->insert([
            
            'presence' => "Présent",
            
        ]);
        DB::table('presences')->insert([
            
            'presence' => "Absent",
            
        ]);
    }
}
