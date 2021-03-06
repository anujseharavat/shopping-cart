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
            'imagePath' => 'http://7.belpotter.by/files/2014/05/germania_7B.gif',
            'title' => 'Harry Potter',
            'description' => 'Harry Potter Cool - at least as a child',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://rocketdock.com/images/screenshots/SpiderMan02.png',
            'title' => 'Spiderman',
            'description' => 'Spider man- at least as a child',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://wfarm1.dataknet.com/static/resources/icons/set105/7ce3e2c.png',
            'title' => 'Superman',
            'description' => 'Super man- at least as a child',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://www.frendz4m.in/ss/1455772828-screenshot.jpg',
            'title' => 'Super Commando Dhruv',
            'description' => 'Super Commando Dhruv- at least as a child',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://www.indianetzone.com/photos_gallery/49/Artwork_of_Nagraj.jpg',
            'title' => 'Nagraj',
            'description' => 'Nagraj- at least as a child',
            'price' => 10
        ]);
        $product->save();
    }
}
