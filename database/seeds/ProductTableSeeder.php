<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 1; $i < 32; $i++) {
            App\Models\Product::create([
                'name' => $faker->streetName,
                'code' => 'XXXYYY'.$faker->unique()->numberBetween(1,100),
                'brand' => $faker->randomElement(['RFL', 'Samsung', 'Iphone', 'Apple','Acer', 'Asus']),
                'details'=>$faker->randomHtml(3,3),
                'thumbnail' => $i.'.jpg',
                'major_id' => $faker->randomElement([1, 2, 3,4]),
                'sub_id' => $faker->randomElement([1, 2, 3, 4]),
            ]);
        }
    }
}
