<?php

namespace Admin\Extend\AdminShopify\Seeders;

use Admin\Extend\AdminShopify\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodsSeeder extends Seeder
{
    public function run()
    {
        PaymentMethod::create([
            'name' => ['en' => 'Cash', 'ru' => 'Наличные', 'uk' => 'Готівка'],
            'description' => [
                'en' => 'Cash on delivery',
                'ru' => 'Оплата наличными при получении',
                'uk' => 'Оплата готівкою при отриманні',
            ],
        ]);

        PaymentMethod::create([
            'name' => ['en' => 'Card', 'ru' => 'Карта', 'uk' => 'Карта'],
            'description' => [
                'en' => 'Card payment',
                'ru' => 'Оплата картой',
                'uk' => 'Оплата карткою',
            ],
        ]);

        PaymentMethod::create([
            'name' => ['en' => 'PayPal', 'ru' => 'PayPal', 'uk' => 'PayPal'],
            'description' => [
                'en' => 'PayPal payment',
                'ru' => 'Оплата через PayPal',
                'uk' => 'Оплата через PayPal',
            ],
        ]);
    }
}
