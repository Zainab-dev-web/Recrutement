<?php

use Illuminate\Database\Seeder;

class InfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            
            'titre' => "Zainab Performance Services For Multiple Industries.",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique tempore labore est consequuntur dolor fugiat soluta iste commodi, accusantium id impedit sequi ullam quo eveniet, nobis ratione? Asperiores, error aliquam!",
            
        ]);
    }
}
