<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'user_id' => 2,
            'statut_id' => 1,
            'poste' => 'Web developpeur',
            'lieu' => 'Mons',
            'description' => 'Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Suspendisse non nisl sit amet velit hendrerit rutrum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Curabitur nisi. Etiam iaculis nunc ac metus.',
            'qualite' => 'consectetuer hendrerit lacus. Phasellus dolor. Phasellus ullamcorper ipsum rutrum nunc. Curabitur turpis. Phasellus blandit leo ut odio',
            'created_at' => Carbon::now()->format('Y-m-d'),
        ]);

        DB::table('offres')->insert([   
            'user_id' => 3,
            'statut_id' => 2,
            'poste' => 'Caissière',
            'lieu' => 'Bruxelles',
            'description' => 'Phasellus dolor. Phasellus ullamcorper ipsum rutrum nunc. Curabitur turpis. Phasellus blandit leo ut odio. Vivamus consectetuer hendrerit lacus. Phasellus dolor. Phasellus ullamcorper ipsum rutrum nunc. Curabitur turpis. Phasellus blandit leo ut odio. Vivamus consectetuer hendrerit lacus.',
            'qualite' => 'consectetuer hendrerit lacus. Phasellus dolor. Phasellus ullamcorper ipsum rutrum nunc. Curabitur turpis. Phasellus blandit leo ut odio',
            'created_at' => Carbon::now()->format('Y-m-d'),
        ]);

        DB::table('offres')->insert([   
            'user_id' => 8,
            'statut_id' => 2,
            'poste' => 'Web designer',
            'lieu' => 'Bruxelles',
            'description' => 'Phasellus dolor. Phasellus ullamcorper ipsum rutrum nunc. Curabitur turpis. Phasellus blandit leo ut odio. Vivamus consectetuer hendrerit lacus. Phasellus dolor. Phasellus ullamcorper ipsum rutrum nunc. Curabitur turpis. Phasellus blandit leo ut odio. Vivamus consectetuer hendrerit lacus.',
            'qualite' => 'consectetuer hendrerit lacus. Phasellus dolor. Phasellus ullamcorper ipsum rutrum nunc. Curabitur turpis. Phasellus blandit leo ut odio',
            'created_at' => Carbon::now()->format('Y-m-d'),
        ]);
        DB::table('offres')->insert([   
            'user_id' => 9,
            'statut_id' => 2,
            'poste' => 'Magasinier',
            'lieu' => 'Liège',
            'description' => 'Phasellus dolor. Phasellus ullamcorper ipsum rutrum nunc. Curabitur turpis. Phasellus blandit leo ut odio. Vivamus consectetuer hendrerit lacus. Phasellus dolor. Phasellus ullamcorper ipsum rutrum nunc. Curabitur turpis. Phasellus blandit leo ut odio. Vivamus consectetuer hendrerit lacus.',
            'qualite' => 'consectetuer hendrerit lacus. Phasellus dolor. Phasellus ullamcorper ipsum rutrum nunc. Curabitur turpis. Phasellus blandit leo ut odio',
            'created_at' => Carbon::now()->format('Y-m-d'),
        ]);
        DB::table('offres')->insert([   
            'user_id' => 8,
            'statut_id' => 2,
            'poste' => 'Conseiller/ère (h/f)',
            'lieu' => 'Mons',
            'description' => 'Phasellus dolor. Phasellus ullamcorper ipsum rutrum nunc. Curabitur turpis. Phasellus blandit leo ut odio. Vivamus consectetuer hendrerit lacus. Phasellus dolor. Phasellus ullamcorper ipsum rutrum nunc. Curabitur turpis. Phasellus blandit leo ut odio. Vivamus consectetuer hendrerit lacus.',
            'qualite' => 'consectetuer hendrerit lacus. Phasellus dolor. Phasellus ullamcorper ipsum rutrum nunc. Curabitur turpis. Phasellus blandit leo ut odio',
            'created_at' => Carbon::now()->format('Y-m-d'),
        ]);
    }
}
