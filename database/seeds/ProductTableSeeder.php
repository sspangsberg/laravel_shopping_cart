<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/thumb/9/9b/Homm3boxart.jpg/256px-Homm3boxart.jpg',
            'title' => 'Heroes of Might and Magic 3',
            'description' => 'Super cool turn-based strategy game - played 1000+ of hours',
            'price' => 10
        ]);
        $product->save();


        $product = new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/7/77/HoMM3_Shadow_of_Death_box_art.jpg',
            'title' => 'Heroes of Might and Magic 3 - Shadow of Death',
            'description' => 'Expansion pack to HOMM3 turn-based strategy game',
            'price' => 7
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://settlers2.net/wp-content/uploads/2011/07/The-Settlers-II-Veni-Vidi-Vici-C.jpg',
            'title' => 'The Settlers II',
            'description' => 'Nice strategy game of the world dominance',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://gamemusic.files.wordpress.com/2007/12/warcraft_orcs_humans-400-400.jpg?w=1400',
            'title' => 'WarCraft',
            'description' => 'First version of the era making strategy game',
            'price' => 11
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.mobygames.com/images/covers/l/146326-starcraft-anthology-windows-other.jpg',
            'title' => 'StarCraft',
            'description' => 'Cool strategy game with stars and galaxy theme',
            'price' => 15
        ]);
        $product->save();

    }
}
