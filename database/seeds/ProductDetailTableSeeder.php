<?php

use Illuminate\Database\Seeder;

class ProductDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 1; $i < 32; $i++) {
            App\Models\ProductDetail::create([
                'product_id' => $i,
                'size' => $faker->randomElement(['Small', 'Medium','Large']),
                'color' =>  $faker->randomElement(['Red', 'Green','Blue','Black']),
                'others' =>  $faker->text(50),
                'original_price' =>$faker-> numberBetween(1000,2000),
                'selling_price' =>$faker-> numberBetween(900,1200),
                'fake_price' =>$faker-> numberBetween(900,1200),
                'quantity' => $faker->randomElement([5, 10,15,1,2,3]),
                'shipping_upto' => $faker->randomElement([5,10,15,20]),
                'shipping_cost' => $faker->randomElement([45, 60,100]),

            ]);
        }

        for($i = 0; $i <200; $i++) {
            App\Models\ProductDetail::create([
                'product_id' => $faker-> numberBetween(1,31),
                'size' => $faker->randomElement(['Small', 'Medium','Large']),
                'color' =>  $faker->randomElement(['Red', 'Green','Blue','Black']),
                'others' =>  $faker->text(50),
                'original_price' =>$faker-> numberBetween(1000,1200),
                'selling_price' =>$faker-> numberBetween(1200,1400),
                'fake_price' =>$faker-> numberBetween(1400,1600),
                'quantity' => $faker->randomElement([5, 10,15,1,2,3]),
                'shipping_upto' => $faker->randomElement([5,3,4,7]),
                'shipping_cost' => $faker->randomElement([50, 70,100]),

            ]);


        }
    }
}
