<?php

use Illuminate\Database\Seeder;


class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\Models\Admin::create([
            'name' => 'AdminFaisal',
            'email' => 'admin@xfaisal.com',
            'password' => bcrypt('admin1234')
        ]);

        App\Models\Admin::create([
            'name' => 'Sujon',
            'email' => 'sujonalimran@gmail.com',
            'password' => bcrypt('admin1234')
        ]);

    }
}
