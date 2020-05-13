<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('roles')->insert([
            
            'role' => 'Web-master',
            
        ]);
        DB::table('roles')->insert([
            
            'role' => 'Human Resource Talent',
            
        ]);
        DB::table('roles')->insert([
            
            'role' => 'Human Resource Entreprise',
            
        ]);
        DB::table('roles')->insert([
            
            'role' => 'Talent',
            
        ]);
        DB::table('roles')->insert([
            
            'role' => 'Entreprise',
            
        ]);
    
       
    }
}
