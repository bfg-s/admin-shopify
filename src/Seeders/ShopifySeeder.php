<?php

namespace Admin\Extend\AdminShopify\Seeders;

use Illuminate\Database\Seeder;

class ShopifySeeder extends Seeder
{
    public function run()
    {
        $this->call(CountryAndCurrencySeeder::class);
        $this->call(ProductCategoriesSeeder::class);
        $this->call(PaymentMethodsSeeder::class);
        $this->call(DeliveriesSeeder::class);
        $this->call(ShopsSeeder::class);
        $this->call(ProductsSeeder::class);
    }
}
