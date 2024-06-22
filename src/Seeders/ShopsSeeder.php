<?php

namespace Admin\Extend\AdminShopify\Seeders;

use Admin\Core\ModelSaver;
use Admin\Extend\AdminShopify\Models\Shop;
use Illuminate\Database\Seeder;

class ShopsSeeder extends Seeder
{
    public function run()
    {
        ModelSaver::do(Shop::class, [
            'name' => ['en' => 'Shopify', 'ru' => 'Shopify', 'uk' => 'Shopify'],
            'description' => 'Shopify',
            'url' => 'https://shopify.com',
            'seo' => [
                'slug' => 'shopify',
                'title' => ['en' => 'Shopify', 'ru' => 'Shopify', 'uk' => 'Shopify'],
                'description' => ['en' => 'Shopify', 'ru' => 'Shopify', 'uk' => 'Shopify'],
                'keywords' => ['en' => 'Shopify', 'ru' => 'Shopify', 'uk' => 'Shopify'],
            ]
        ]);
    }
}
