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
            'description' => 'Super cool game - played 1000+ of hours',
            'price' => 10
        ]);
        $product->save();


        $product = new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/thumb/9/9b/Homm3boxart.jpg/256px-Homm3boxart.jpg',
            'title' => 'Heroes of Might and Magic 3',
            'description' => 'Super cool game - played 1000+ of hours',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/thumb/9/9b/Homm3boxart.jpg/256px-Homm3boxart.jpg',
            'title' => 'Heroes of Might and Magic 3',
            'description' => 'Super cool game - played 1000+ of hours',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/thumb/9/9b/Homm3boxart.jpg/256px-Homm3boxart.jpg',
            'title' => 'Heroes of Might and Magic 3',
            'description' => 'Super cool game - played 1000+ of hours',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/thumb/9/9b/Homm3boxart.jpg/256px-Homm3boxart.jpg',
            'title' => 'Heroes of Might and Magic 3',
            'description' => 'Super cool game - played 1000+ of hours',
            'price' => 10
        ]);
        $product->save();

    }
}
