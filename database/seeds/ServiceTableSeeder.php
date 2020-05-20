<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            
            'icone' => 'flaticon-experience',
            'titre'=> 'Aide Planning',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.'
        ]);
        DB::table('services')->insert([
            
            'icone' => 'flaticon-pay',
            'titre'=> 'Suivi & stocks',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.'
        ]);
        DB::table('services')->insert([
            
            'icone' => 'flaticon-good',
            'titre'=> 'Audit & Assurance',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.'
        ]);
    }
}
