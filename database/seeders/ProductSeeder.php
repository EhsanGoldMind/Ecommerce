<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Tesla Model 3',
                'price' => '$49.999',
                'category' => 'Car',
                'description' => 'The currently enabled features require active driver supervision and do not make the vehicle autonomous.',
                'gallery' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/2019-tesla-model-3-103-1574807024.jpg?crop=1.00xw:0.445xh;0,0.359xh&resize=980:*',
            ],
            ['name' => 'Xbox Series X',
                'price' => '$750.00',
                'category' => 'Consoles and Video Game',
                'description' => 'Introducing Xbox Series X, the fastest, most powerful Xbox ever. Play thousands of titles from four generations of consoles-all games look and play best on Xbox Series X.',
                'gallery' => 'https://compass-ssl.xbox.com/assets/f7/9c/f79cf7d6-8fe6-407d-817e-441767306365.png?n=XBX_A-BuyBoxBGImage02-D.png',],

            ['name' => 'SAMSUNG 65-inch Class Crystal UHD TU-8000 Series',
                'price' => '$755.75',
                'category' => 'TV & Video',
                'description' => 'Crystal processor 4K: This ultra-fast processor transforms everything you watch into stunning 4K.
Multi voice: Smart TV with Alexa and Bixby.',
                'gallery' => 'https://image-us.samsung.com/SamsungUS/home/televisions-and-home-theater/tvs/uhd-tv/tu8000/021020/gallery/PDP-GALLERY-TU8000-01-Front2-Titan-Gray-1600x1200.jpg?$product-details-jpg$',],
        ]);
    }
}
