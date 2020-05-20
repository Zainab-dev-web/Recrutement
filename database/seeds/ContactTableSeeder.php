<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            
            'adresse' => 'Buttonwoo',
            'ville' => 'California',
            'rue' => 'Rosemead',
            'code' => ' CA 91770',
            'numero' => '+1 253 565 2365',
            'Ndispo' => 'Mon to Fri 9am to 6pm',
            'email' => 'support@colorlib.com',
            'Edispo' => 'Send us your query anytime!'
            
        ]);
    }
}
