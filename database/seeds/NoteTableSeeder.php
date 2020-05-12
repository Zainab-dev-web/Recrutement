<?php

use Illuminate\Database\Seeder;

class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert([
            
            'note' => "1",
            
        ]);
        DB::table('notes')->insert([
            
            'note' => "2",
            
        ]);
        DB::table('notes')->insert([
            
            'note' => "3",
            
        ]);
        DB::table('notes')->insert([
            
            'note' => "4",
            
        ]);
        DB::table('notes')->insert([
            
            'note' => "5",
            
        ]);
    }
}
