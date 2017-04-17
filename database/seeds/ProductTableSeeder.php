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

    'imagePath' => '/../webProject/public/images/articles/sweatBDEav.JPG',
    'title'=>'Sweat Cesi Bordeaux',
    'description'=>'Nulla in auctor sapien. Donec quis interdum libero. Suspendisse placerat mauris non aliquet
                        finibus. Cras varius venenatis tellus, sed rutrum est porttitor faucibus. Fusce sed metus
                        elementum, suscipit erat ultricies, vulputate dolor. Cras dignissim elit id convallis
                        sollicitudin. Cras vel sagittis nibh. Maecenas vulputate interdum porttitor. Etiam urna
                        turpis, sagittis vel magna in, ullamcorper convallis velit. Quisque nec malesuada dui, ut
                        semper lacus. Vestibulum vel consectetur purus.',
    'price'=> 25
]);

$product->save();
    }
}
