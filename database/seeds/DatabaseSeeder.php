<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables();

        factory(\App\User::class, 10)->create();
        factory(\App\Product::class, 200)->create();
    }

    private function truncateTables(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\User::truncate();
        \App\Product::truncate();
        \App\PromoCode::truncate();
        \App\ShoppingCart::truncate();
        \App\ShoppingCartItem::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
