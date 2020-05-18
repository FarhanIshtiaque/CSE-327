<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MajorTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('major_types')->insert([
            [
                'name' => 'Male',
                'image' => "1.jpg",
            ],
            [
                'name' => 'Female',
                'image' => "2.jpg",
            ],
            [
                'name' => 'Kids',
                'image' => "3.jpg",
            ],
            [
                'name' => 'Girls',
                'image' => '4.jpg',
            ],
        ]);

    }
}
