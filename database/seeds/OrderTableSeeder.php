<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 40; $i++) {
            App\Models\Order::create([
                'user_id' => $faker->numberBetween(1, 10),
                'date' => $faker->dateTime,
                'name' => $faker->name,
                'mobile' => $faker->phoneNumber,
                'email' => $faker->email,
                'shipping_address' => $faker->address,
                'payment_method' => $faker->randomElement(['Bksah', 'COD', 'Paypal']),
                'shipping_type' => $faker->randomElement(['Office Pickup', 'Home Delivery']),
                'message' => $faker->text(50),
                'reply' => $faker->text(50),
                'status' => $faker->numberBetween(0, 5)
            ]);
        }
    }
}
