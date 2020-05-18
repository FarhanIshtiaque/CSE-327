<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\User::create([
            'name' => 'UserFaisal',
            'email' => 'user@xfaisal.com',
            'mobile' => '0123456',
            'address'=>'jpydebpur',
            'district'=>'Gazipur',
            'gender'=>'m',
            'password' => bcrypt('user1234')
        ]);

        App\Models\User::create([
            'name' => 'Sujon',
            'email' => 'sujonalimran@gmail.com',
            'mobile' => '0123456',
            'address'=>'jpydebpur',
            'district'=>'Gazipur',
            'gender'=>'m',
            'password' => bcrypt('12345678')
        ]);

        $faker = Faker\Factory::create();
        for ($i = 0; $i <10; $i++) {
            App\Models\User::create([
                'name' => $faker->name,
                'mobile' => $faker->phoneNumber,
                'email' => Str::random(10) . '@gmail.com',
                'password' => bcrypt('password'),
                'address'=>$faker->address,
                'district'=>$faker->city,
                'gender'=>$faker->randomLetter,
                'birth_day'=>$faker->dateTime,



            ]);
        }

    }
}
