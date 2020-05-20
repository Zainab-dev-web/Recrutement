<?php

use Illuminate\Database\Seeder;

class CarouselTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filename = Str::random(10) . time() . '.jpg';
        Storage::disk('public')->copy('/hero_img.jpg', $filename);
        DB::table('carousels')->insert([
            'name' => 'Business Synergy via',
            'titre' => 'Robust Strategies',
            'slogan' => 'Aasrem dfgum dolor sivst amet, consectetur adipisicing elitvde, sed dvo eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad micnim veniam, quis nostrud exercita',
            'photo' => $filename,
        ]);
        $filename = Str::random(10) . time() . '.jpg';
        Storage::disk('public')->copy('/hero_img2.jpg', $filename);
        DB::table('carousels')->insert([
            
            'name' => 'Business Synergy via',
            'titre' => 'Robust Strategies',
            'slogan' => 'Aasrem dfgum dolor sivst amet, consectetur adipisicing elitvde, sed dvo eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad micnim veniam, quis nostrud exercita',
            'photo' => $filename,
        ]);
    }
}
