<?php

use Illuminate\Database\Seeder;

class OffreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offres')->insert([
            
            'user_id' => 1,
            'statut_id' => 1,
            'poste' => 'Web developpeur',
            'lieu' => 'Mons',
            'description' => 'Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Suspendisse non nisl sit amet velit hendrerit rutrum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Curabitur nisi. Etiam iaculis nunc ac metus.'
            
        ]);
    }
}
