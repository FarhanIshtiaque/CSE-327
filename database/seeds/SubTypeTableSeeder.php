<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_types')->insert([
            [
                'name' => 'Shirt',
                'image' => "1.jpeg",
            ],
            [
                'name' => 'Pant',
                'image' => "2.jpeg",
            ],
            [
                'name' => 'Watch',
                'image' => "3.jpeg",
            ],
            [
                'name' => 'Shoe',
                'image' => '4.jpeg',
            ],
            [
                'name' => 'Shirt5',
                'image' => "1.jpeg",
            ],
            [
                'name' => 'Pant6',
                'image' => "2.jpeg",
            ],
            [
                'name' => 'Watch7',
                'image' => "3.jpeg",
            ],
            [
                'name' => 'Shoe7',
                'image' => '4.jpeg',
            ],
            [
                'name' => 'Shirt8',
                'image' => "1.jpeg",
            ],
            [
                'name' => 'Pant9',
                'image' => "2.jpeg",
            ],
            [
                'name' => 'Watch11',
                'image' => "3.jpeg",
            ],
            [
                'name' => 'Shoe12',
                'image' => '4.jpeg',
            ],
            [
                'name' => 'Shirt123',
                'image' => "1.jpeg",
            ],
            [
                'name' => 'Pant15',
                'image' => "2.jpeg",
            ],
            [
                'name' => 'Watch17',
                'image' => "3.jpeg",
            ],
            [
                'name' => 'Shoe19',
                'image' => '4.jpeg',
            ],
        ]);
    }
}
