<?php

use Illuminate\Database\Seeder;

class OrderItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 30; $i++) {
            App\Models\OrderItem::create([
                'order_id'     =>$faker-> numberBetween(1,10),
                'product_id'     =>$faker-> numberBetween(1,10),
                'details_id'     =>$faker-> numberBetween(1,10),
                'title'          =>$faker-> name(),
                'model'          =>$faker-> randomElement(['Iphone X', 'Iphone 3','Iphone 4','Iphone 1','Iphone 7']),
                'brand'          =>$faker-> randomElement(['RFL', 'Bengol','Bashundhara']),
                'details'        =>$faker-> text(50),
                'size'           =>$faker->randomElement(['Small', 'Medium','Large']),
                'color'          =>$faker->randomElement(['Red', 'Green','Blue','Black']),
                'others'         =>$faker->text(50),
                'original_price' =>$faker-> numberBetween(1000,1100),
                'selling_price'  =>$faker-> numberBetween(1100,1200),
                'discount' => $faker->randomElement([5,10,15,20]),

                'quantity'       =>$faker->randomElement([5, 10,15,1,2,3]),
                'shipping_cost'  =>$faker->randomElement([45, 60,100]),
                'thumbnail'  =>$faker->randomElement(['1.jpg', '2.jpg','3.jpg','4.jpg', '5.jpg','6.jpg',
                    '7.jpg', '8.jpg','9.jpg','10.jpg', '11.jpg','12.jpg',
                ]),

            ]);
        }
    }
}
