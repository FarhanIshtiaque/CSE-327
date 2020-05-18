<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            AdminTableSeeder::class,
            MajorTypeTableSeeder::class,
            SubTypeTableSeeder::class,
            ProductTableSeeder::class,
            ProductDetailTableSeeder::class,
            ProductImageTableSeeder::class,
            QuestionTableSeeder::class,
            ReviewTableSeeder::class,
            HotDealTableSeeder::class,
            SlideTableSeeder::class,
            BannerTableSeeder::class,
            OrderTableSeeder::class,
            OrderItemTableSeeder::class,
            CompanyInfoTableSeeder::class,
            WishListTableSeeder::class
        ]);



    }
}
