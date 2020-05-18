<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 10; $i++) {
            App\Models\Question::create([
                'product_id' => $faker-> numberBetween(1,10),
                'user_id' => $faker-> numberBetween(1,10),
                'question' => $faker->text( 20) ,
                'answer' => $faker->text( 50) ,
                'visibility' => $faker->randomElement([0,1]),
            ]);
        }
    }
}
