<?php

namespace Admin\Extend\AdminShopify\Seeders;

use Admin\Extend\AdminShopify\Models\Delivery;
use Illuminate\Database\Seeder;

class DeliveriesSeeder extends Seeder
{
    public function run()
    {
        Delivery::create([
            'name' => ['en' => 'Nova Poshta', 'ru' => 'Новая Почта', 'uk' => 'Нова Пошта'],
            'description' => [
                'en' => 'Delivery by Nova Poshta',
                'ru' => 'Доставка Новой Почтой',
                'uk' => 'Доставка Новою Поштою',
            ],
        ]);

        Delivery::create([
            'name' => ['en' => 'Ukrposhta', 'ru' => 'Укрпочта', 'uk' => 'Укрпошта'],
            'description' => [
                'en' => 'Delivery by Ukrposhta',
                'ru' => 'Доставка Укрпочтой',
                'uk' => 'Доставка Укрпоштою',
            ],
        ]);

        Delivery::create([
            'name' => ['en' => 'Justin', 'ru' => 'Justin', 'uk' => 'Justin'],
            'description' => [
                'en' => 'Delivery by Justin',
                'ru' => 'Доставка Justin',
                'uk' => 'Доставка Justin',
            ],
        ]);
    }
}
