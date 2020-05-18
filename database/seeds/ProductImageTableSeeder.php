<?php

use Illuminate\Database\Seeder;

class ProductImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 16; $i++) {
            App\Models\ProductImage::create([
                'product_id' => $faker-> numberBetween(1,10),
                'image' => $faker->randomElement(['1.jpg', '2.jpg','3.jpg','4.jpg', '5.jpg','6.jpg',
                                                        '7.jpg', '8.jpg','9.jpg','10.jpg', '11.jpg','12.jpg',
                                                        ]),
            ]);
        }
    }
}
