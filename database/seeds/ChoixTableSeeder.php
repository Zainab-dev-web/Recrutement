<?php

use Illuminate\Database\Seeder;

class ChoixTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choixes')->insert([
            
            'valid' => 0,
            
        ]);
    }
}
