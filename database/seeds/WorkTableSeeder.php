<?php

use Illuminate\Database\Seeder;

class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            
        
            'titre'=> 'Once you’ve settled on a business',
            'description'=>'Haute Performance Services For Multiple Industries.'
        ]);
    }
}
