<?php

namespace Admin\Extend\AdminShopify\Seeders;

use Admin\Core\ModelSaver;
use Admin\Extend\AdminShopify\Models\ProductCategory;
use Admin\Extend\AdminShopify\Models\ProductCategoryProperty;

class ProductCategoriesSeeder extends AbstractSeeder
{
    /**
     * @var array
     */
    protected array $categories = [
        [
            'name' => [
                'en' => 'Phones',
                'ru' => 'Телефоны',
                'uk' => 'Телефони',
            ],
            'photo' => '/vendor/admin-shopify/phone-category-photo.png',
            'properties' => [
                [
                    'name' => [
                        'en' => 'Manufacturer',
                        'ru' => 'Производитель',
                        'uk' => 'Виробник',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'Apple',
                                'ru' => 'Apple',
                                'uk' => 'Apple',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Samsung',
                                'ru' => 'Samsung',
                                'uk' => 'Samsung',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'LG',
                                'ru' => 'LG',
                                'uk' => 'LG',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Google+',
                                'ru' => 'Google+',
                                'uk' => 'Google+',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Xiaomi',
                                'ru' => 'Xiaomi',
                                'uk' => 'Xiaomi',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Color',
                        'ru' => 'Цвет',
                        'uk' => 'Колір',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'Black',
                                'ru' => 'Черный',
                                'uk' => 'Чорний',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'White',
                                'ru' => 'Белый',
                                'uk' => 'Білий',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Red',
                                'ru' => 'Красный',
                                'uk' => 'Червоний',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Blue',
                                'ru' => 'Синий',
                                'uk' => 'Синій',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Green',
                                'ru' => 'Зеленый',
                                'uk' => 'Зелений',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Memory',
                        'ru' => 'Память',
                        'uk' => 'Пам\'ять',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '16GB',
                                'ru' => '16ГБ',
                                'uk' => '16ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '32GB',
                                'ru' => '32ГБ',
                                'uk' => '32ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '64GB',
                                'ru' => '64ГБ',
                                'uk' => '64ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '128GB',
                                'ru' => '128ГБ',
                                'uk' => '128ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '256GB',
                                'ru' => '256ГБ',
                                'uk' => '256ГБ',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'OS',
                        'ru' => 'ОС',
                        'uk' => 'ОС',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'iOS',
                                'ru' => 'iOS',
                                'uk' => 'iOS',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Android',
                                'ru' => 'Android',
                                'uk' => 'Android',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Windows',
                                'ru' => 'Windows',
                                'uk' => 'Windows',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Linux',
                                'ru' => 'Linux',
                                'uk' => 'Linux',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'MacOS',
                                'ru' => 'MacOS',
                                'uk' => 'MacOS',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Screen size',
                        'ru' => 'Размер экрана',
                        'uk' => 'Розмір екрану',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '4.7"',
                                'ru' => '4.7"',
                                'uk' => '4.7"',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '5.5"',
                                'ru' => '5.5"',
                                'uk' => '5.5"',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '6.1"',
                                'ru' => '6.1"',
                                'uk' => '6.1"',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '6.5"',
                                'ru' => '6.5"',
                                'uk' => '6.5"',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '7.9"',
                                'ru' => '7.9"',
                                'uk' => '7.9"',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Camera',
                        'ru' => 'Камера',
                        'uk' => 'Камера',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '12MP',
                                'ru' => '12МП',
                                'uk' => '12МП',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '16MP',
                                'ru' => '16МП',
                                'uk' => '16МП',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '20MP',
                                'ru' => '20МП',
                                'uk' => '20МП',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '24MP',
                                'ru' => '24МП',
                                'uk' => '24МП',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '32MP',
                                'ru' => '32МП',
                                'uk' => '32МП',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Battery',
                        'ru' => 'Батарея',
                        'uk' => 'Батарея',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '2000mAh',
                                'ru' => '2000мАч',
                                'uk' => '2000мАч',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '3000mAh',
                                'ru' => '3000мАч',
                                'uk' => '3000мАч',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '4000mAh',
                                'ru' => '4000мАч',
                                'uk' => '4000мАч',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '5000mAh',
                                'ru' => '5000мАч',
                                'uk' => '5000мАч',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '6000mAh',
                                'ru' => '6000мАч',
                                'uk' => '6000мАч',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Warranty',
                        'ru' => 'Гарантия',
                        'uk' => 'Гарантія',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '1 year',
                                'ru' => '1 год',
                                'uk' => '1 рік',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '2 years',
                                'ru' => '2 года',
                                'uk' => '2 роки',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '3 years',
                                'ru' => '3 года',
                                'uk' => '3 роки',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '4 years',
                                'ru' => '4 года',
                                'uk' => '4 роки',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '5 years',
                                'ru' => '5 лет',
                                'uk' => '5 років',
                            ],
                        ],
                    ],
                ],
            ],
            'seo' => [
                'slug' => 'phones',
                'title' => [
                    'en' => 'Phones',
                    'ru' => 'Телефоны',
                    'uk' => 'Телефони',
                ],
                'description' => [
                    'en' => 'Phones',
                    'ru' => 'Телефоны',
                    'uk' => 'Телефони',
                ],
                'keywords' => [
                    'en' => 'Phones',
                    'ru' => 'Телефоны',
                    'uk' => 'Телефони',
                ],
            ]
        ],
        [
            'name' => [
                'en' => 'Laptops',
                'ru' => 'Ноутбуки',
                'uk' => 'Ноутбуки',
            ],
            'photo' => '/vendor/admin-shopify/laptops-category-photo.png',
            'properties' => [
                [
                    'name' => [
                        'en' => 'Manufacturer',
                        'ru' => 'Производитель',
                        'uk' => 'Виробник',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'Apple',
                                'ru' => 'Apple',
                                'uk' => 'Apple',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Samsung',
                                'ru' => 'Samsung',
                                'uk' => 'Samsung',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'LG',
                                'ru' => 'LG',
                                'uk' => 'LG',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Google+',
                                'ru' => 'Google+',
                                'uk' => 'Google+',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Xiaomi',
                                'ru' => 'Xiaomi',
                                'uk' => 'Xiaomi',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Color',
                        'ru' => 'Цвет',
                        'uk' => 'Колір',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'Black',
                                'ru' => 'Черный',
                                'uk' => 'Чорний',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'White',
                                'ru' => 'Белый',
                                'uk' => 'Білий',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Red',
                                'ru' => 'Красный',
                                'uk' => 'Червоний',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Blue',
                                'ru' => 'Синий',
                                'uk' => 'Синій',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Green',
                                'ru' => 'Зеленый',
                                'uk' => 'Зелений',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Memory',
                        'ru' => 'Память',
                        'uk' => 'Пам\'ять',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '16GB',
                                'ru' => '16ГБ',
                                'uk' => '16ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '32GB',
                                'ru' => '32ГБ',
                                'uk' => '32ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '64GB',
                                'ru' => '64ГБ',
                                'uk' => '64ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '128GB',
                                'ru' => '128ГБ',
                                'uk' => '128ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '256GB',
                                'ru' => '256ГБ',
                                'uk' => '256ГБ',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'OS',
                        'ru' => 'ОС',
                        'uk' => 'ОС',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'Windows',
                                'ru' => 'Windows',
                                'uk' => 'Windows',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Linux',
                                'ru' => 'Linux',
                                'uk' => 'Linux',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'MacOS',
                                'ru' => 'MacOS',
                                'uk' => 'MacOS',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Screen size',
                        'ru' => 'Размер экрана',
                        'uk' => 'Розмір екрану',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '13"',
                                'ru' => '13"',
                                'uk' => '13"',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '15"',
                                'ru' => '15"',
                                'uk' => '15"',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '17"',
                                'ru' => '17"',
                                'uk' => '17"',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Processor',
                        'ru' => 'Процессор',
                        'uk' => 'Процесор',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'Apple M1',
                                'ru' => 'Apple M1',
                                'uk' => 'Apple M1',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Apple M2',
                                'ru' => 'Apple M2',
                                'uk' => 'Apple M2',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Apple M3',
                                'ru' => 'Apple M3',
                                'uk' => 'Apple M3',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Intel Core i3',
                                'ru' => 'Intel Core i3',
                                'uk' => 'Intel Core i3',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Intel Core i5',
                                'ru' => 'Intel Core i5',
                                'uk' => 'Intel Core i5',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Intel Core i7',
                                'ru' => 'Intel Core i7',
                                'uk' => 'Intel Core i7',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Intel Core i9',
                                'ru' => 'Intel Core i9',
                                'uk' => 'Intel Core i9',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'RAM',
                        'ru' => 'ОЗУ',
                        'uk' => 'ОЗУ',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '4GB',
                                'ru' => '4ГБ',
                                'uk' => '4ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '8GB',
                                'ru' => '8ГБ',
                                'uk' => '8ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '16GB',
                                'ru' => '16ГБ',
                                'uk' => '16ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '32GB',
                                'ru' => '32ГБ',
                                'uk' => '32ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '64GB',
                                'ru' => '64ГБ',
                                'uk' => '64ГБ',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Warranty',
                        'ru' => 'Гарантия',
                        'uk' => 'Гарантія',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '1 year',
                                'ru' => '1 год',
                                'uk' => '1 рік',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '2 years',
                                'ru' => '2 года',
                                'uk' => '2 роки',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '3 years',
                                'ru' => '3 года',
                                'uk' => '3 роки',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '4 years',
                                'ru' => '4 года',
                                'uk' => '4 роки',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '5 years',
                                'ru' => '5 года',
                                'uk' => '5 роки',
                            ]
                        ]
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Weight',
                        'ru' => 'Вес',
                        'uk' => 'Вага',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '1kg',
                                'ru' => '1кг',
                                'uk' => '1кг',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '2kg',
                                'ru' => '2кг',
                                'uk' => '2кг',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '3kg',
                                'ru' => '3кг',
                                'uk' => '3кг',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '4kg',
                                'ru' => '4кг',
                                'uk' => '4кг',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '5kg',
                                'ru' => '5кг',
                                'uk' => '5кг',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Screen resolution',
                        'ru' => 'Разрешение экрана',
                        'uk' => 'Роздільна здатність екрану',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'HD',
                                'ru' => 'HD',
                                'uk' => 'HD',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Full HD',
                                'ru' => 'Full HD',
                                'uk' => 'Full HD',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '2K',
                                'ru' => '2K',
                                'uk' => '2K',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '4K',
                                'ru' => '4K',
                                'uk' => '4K',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '8K',
                                'ru' => '8K',
                                'uk' => '8K',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Graphics card',
                        'ru' => 'Видеокарта',
                        'uk' => 'Відеокарта',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'Intel HD Graphics',
                                'ru' => 'Intel HD Graphics',
                                'uk' => 'Intel HD Graphics',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'NVIDIA GeForce GTX',
                                'ru' => 'NVIDIA GeForce GTX',
                                'uk' => 'NVIDIA GeForce GTX',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'NVIDIA GeForce RTX',
                                'ru' => 'NVIDIA GeForce RTX',
                                'uk' => 'NVIDIA GeForce RTX',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'AMD Radeon',
                                'ru' => 'AMD Radeon',
                                'uk' => 'AMD Radeon',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'AMD Radeon Pro',
                                'ru' => 'AMD Radeon Pro',
                                'uk' => 'AMD Radeon Pro',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Battery',
                        'ru' => 'Батарея',
                        'uk' => 'Батарея',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '2000mAh',
                                'ru' => '2000мАч',
                                'uk' => '2000мАч',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '3000mAh',
                                'ru' => '3000мАч',
                                'uk' => '3000мАч',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '4000mAh',
                                'ru' => '4000мАч',
                                'uk' => '4000мАч',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '5000mAh',
                                'ru' => '5000мАч',
                                'uk' => '5000мАч',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '6000mAh',
                                'ru' => '6000мАч',
                                'uk' => '6000мАч',
                            ],
                        ],
                    ],
                ],
            ],
            'seo' => [
                'slug' => 'laptops',
                'title' => [
                    'en' => 'Laptops',
                    'ru' => 'Ноутбуки',
                    'uk' => 'Ноутбуки',
                ],
                'description' => [
                    'en' => 'Laptops',
                    'ru' => 'Ноутбуки',
                    'uk' => 'Ноутбуки',
                ],
                'keywords' => [
                    'en' => 'Laptops',
                    'ru' => 'Ноутбуки',
                    'uk' => 'Ноутбуки',
                ],
            ]
        ],
        [
            'name' => [
                'en' => 'Tablets',
                'ru' => 'Планшеты',
                'uk' => 'Планшети',
            ],
            'photo' => '/vendor/admin-shopify/tablets-category-photo.png',
            'properties' => [
                [
                    'name' => [
                        'en' => 'Manufacturer',
                        'ru' => 'Производитель',
                        'uk' => 'Виробник',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'Apple',
                                'ru' => 'Apple',
                                'uk' => 'Apple',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Samsung',
                                'ru' => 'Samsung',
                                'uk' => 'Samsung',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'LG',
                                'ru' => 'LG',
                                'uk' => 'LG',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Google+',
                                'ru' => 'Google+',
                                'uk' => 'Google+',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Xiaomi',
                                'ru' => 'Xiaomi',
                                'uk' => 'Xiaomi',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Color',
                        'ru' => 'Цвет',
                        'uk' => 'Колір',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'Black',
                                'ru' => 'Черный',
                                'uk' => 'Чорний',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'White',
                                'ru' => 'Белый',
                                'uk' => 'Білий',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Red',
                                'ru' => 'Красный',
                                'uk' => 'Червоний',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Blue',
                                'ru' => 'Синий',
                                'uk' => 'Синій',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Green',
                                'ru' => 'Зеленый',
                                'uk' => 'Зелений',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Memory',
                        'ru' => 'Память',
                        'uk' => 'Пам\'ять',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '16GB',
                                'ru' => '16ГБ',
                                'uk' => '16ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '32GB',
                                'ru' => '32ГБ',
                                'uk' => '32ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '64GB',
                                'ru' => '64ГБ',
                                'uk' => '64ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '128GB',
                                'ru' => '128ГБ',
                                'uk' => '128ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '256GB',
                                'ru' => '256ГБ',
                                'uk' => '256ГБ',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'OS',
                        'ru' => 'ОС',
                        'uk' => 'ОС',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'iOS',
                                'ru' => 'iOS',
                                'uk' => 'iOS',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Android',
                                'ru' => 'Android',
                                'uk' => 'Android',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Windows',
                                'ru' => 'Windows',
                                'uk' => 'Windows',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Linux',
                                'ru' => 'Linux',
                                'uk' => 'Linux',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'MacOS',
                                'ru' => 'MacOS',
                                'uk' => 'MacOS',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Screen size',
                        'ru' => 'Размер экрана',
                        'uk' => 'Розмір екрану',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '7.9"',
                                'ru' => '7.9"',
                                'uk' => '7.9"',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '9.7"',
                                'ru' => '9.7"',
                                'uk' => '9.7"',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '10.2"',
                                'ru' => '10.2"',
                                'uk' => '10.2"',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '11"',
                                'ru' => '11"',
                                'uk' => '11"',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '12.9"',
                                'ru' => '12.9"',
                                'uk' => '12.9"',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Camera',
                        'ru' => 'Камера',
                        'uk' => 'Камера',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '12MP',
                                'ru' => '12МП',
                                'uk' => '12МП',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '16MP',
                                'ru' => '16МП',
                                'uk' => '16МП',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '20MP',
                                'ru' => '20МП',
                                'uk' => '20МП',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '24MP',
                                'ru' => '24МП',
                                'uk' => '24МП',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '32MP',
                                'ru' => '32МП',
                                'uk' => '32МП',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Battery',
                        'ru' => 'Батарея',
                        'uk' => 'Батарея',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '2000mAh',
                                'ru' => '2000мАч',
                                'uk' => '2000мАч',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '3000mAh',
                                'ru' => '3000мАч',
                                'uk' => '3000мАч',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '4000mAh',
                                'ru' => '4000мАч',
                                'uk' => '4000мАч',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '5000mAh',
                                'ru' => '5000мАч',
                                'uk' => '5000мАч',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '6000mAh',
                                'ru' => '6000мАч',
                                'uk' => '6000мАч',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Warranty',
                        'ru' => 'Гарантия',
                        'uk' => 'Гарантія',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '1 year',
                                'ru' => '1 год',
                                'uk' => '1 рік',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '2 years',
                                'ru' => '2 года',
                                'uk' => '2 роки',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '3 years',
                                'ru' => '3 года',
                                'uk' => '3 роки',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '4 years',
                                'ru' => '4 года',
                                'uk' => '4 роки',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '5 years',
                                'ru' => '5 лет',
                                'uk' => '5 років',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Weight',
                        'ru' => 'Вес',
                        'uk' => 'Вага',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '1kg',
                                'ru' => '1кг',
                                'uk' => '1кг',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '2kg',
                                'ru' => '2кг',
                                'uk' => '2кг',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '3kg',
                                'ru' => '3кг',
                                'uk' => '3кг',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '4kg',
                                'ru' => '4кг',
                                'uk' => '4кг',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '5kg',
                                'ru' => '5кг',
                                'uk' => '5кг',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Screen resolution',
                        'ru' => 'Разрешение экрана',
                        'uk' => 'Роздільна здатність екрану',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'HD',
                                'ru' => 'HD',
                                'uk' => 'HD',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Full HD',
                                'ru' => 'Full HD',
                                'uk' => 'Full HD',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '2K',
                                'ru' => '2K',
                                'uk' => '2K',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '4K',
                                'ru' => '4K',
                                'uk' => '4K',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '8K',
                                'ru' => '8K',
                                'uk' => '8K',
                            ],
                        ],
                    ],
                ],
            ],
            'seo' => [
                'slug' => 'tablets',
                'title' => [
                    'en' => 'Tablets',
                    'ru' => 'Планшеты',
                    'uk' => 'Планшети',
                ],
                'description' => [
                    'en' => 'Tablets',
                    'ru' => 'Планшеты',
                    'uk' => 'Планшети',
                ],
                'keywords' => [
                    'en' => 'Tablets',
                    'ru' => 'Планшеты',
                    'uk' => 'Планшети',
                ],
            ]
        ],
        [
            'name' => [
                'en' => 'Smartwatches',
                'ru' => 'Смарт-часы',
                'uk' => 'Смарт-годинники',
            ],
            'photo' => '/vendor/admin-shopify/smartwatches-category-photo.png',
            'properties' => [
                [
                    'name' => [
                        'en' => 'Manufacturer',
                        'ru' => 'Производитель',
                        'uk' => 'Виробник',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'Apple',
                                'ru' => 'Apple',
                                'uk' => 'Apple',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Samsung',
                                'ru' => 'Samsung',
                                'uk' => 'Samsung',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'LG',
                                'ru' => 'LG',
                                'uk' => 'LG',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Google+',
                                'ru' => 'Google+',
                                'uk' => 'Google+',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Xiaomi',
                                'ru' => 'Xiaomi',
                                'uk' => 'Xiaomi',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Color',
                        'ru' => 'Цвет',
                        'uk' => 'Колір',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'Black',
                                'ru' => 'Черный',
                                'uk' => 'Чорний',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'White',
                                'ru' => 'Белый',
                                'uk' => 'Білий',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Red',
                                'ru' => 'Красный',
                                'uk' => 'Червоний',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Blue',
                                'ru' => 'Синий',
                                'uk' => 'Синій',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Green',
                                'ru' => 'Зеленый',
                                'uk' => 'Зелений',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Memory',
                        'ru' => 'Память',
                        'uk' => 'Пам\'ять',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '16GB',
                                'ru' => '16ГБ',
                                'uk' => '16ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '32GB',
                                'ru' => '32ГБ',
                                'uk' => '32ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '64GB',
                                'ru' => '64ГБ',
                                'uk' => '64ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '128GB',
                                'ru' => '128ГБ',
                                'uk' => '128ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '256GB',
                                'ru' => '256ГБ',
                                'uk' => '256ГБ',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'OS',
                        'ru' => 'ОС',
                        'uk' => 'ОС',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'iOS',
                                'ru' => 'iOS',
                                'uk' => 'iOS',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Android',
                                'ru' => 'Android',
                                'uk' => 'Android',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Windows',
                                'ru' => 'Windows',
                                'uk' => 'Windows',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Linux',
                                'ru' => 'Linux',
                                'uk' => 'Linux',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'MacOS',
                                'ru' => 'MacOS',
                                'uk' => 'MacOS',
                            ],
                        ],
                    ],
                ],
            ],
            'seo' => [
                'slug' => 'smartwatches',
                'title' => [
                    'en' => 'Smartwatches',
                    'ru' => 'Смарт-часы',
                    'uk' => 'Смарт-годинники',
                ],
                'description' => [
                    'en' => 'Smartwatches',
                    'ru' => 'Смарт-часы',
                    'uk' => 'Смарт-годинники',
                ],
                'keywords' => [
                    'en' => 'Smartwatches',
                    'ru' => 'Смарт-часы',
                    'uk' => 'Смарт-годинники',
                ],
            ]
        ],
        [
            'name' => [
                'en' => 'Headphones',
                'ru' => 'Наушники',
                'uk' => 'Навушники',
            ],
            'photo' => '/vendor/admin-shopify/headphones-category-photo.png',
            'properties' => [
                [
                    'name' => [
                        'en' => 'Manufacturer',
                        'ru' => 'Производитель',
                        'uk' => 'Виробник',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'Apple',
                                'ru' => 'Apple',
                                'uk' => 'Apple',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Samsung',
                                'ru' => 'Samsung',
                                'uk' => 'Samsung',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'LG',
                                'ru' => 'LG',
                                'uk' => 'LG',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Google+',
                                'ru' => 'Google+',
                                'uk' => 'Google+',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Xiaomi',
                                'ru' => 'Xiaomi',
                                'uk' => 'Xiaomi',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Color',
                        'ru' => 'Цвет',
                        'uk' => 'Колір',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'Black',
                                'ru' => 'Черный',
                                'uk' => 'Чорний',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'White',
                                'ru' => 'Белый',
                                'uk' => 'Білий',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Red',
                                'ru' => 'Красный',
                                'uk' => 'Червоний',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Blue',
                                'ru' => 'Синий',
                                'uk' => 'Синій',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'Green',
                                'ru' => 'Зеленый',
                                'uk' => 'Зелений',
                            ],
                        ],
                    ],
                ],
            ],
            'seo' => [
                'slug' => 'headphones',
                'title' => [
                    'en' => 'Headphones',
                    'ru' => 'Наушники',
                    'uk' => 'Навушники',
                ],
                'description' => [
                    'en' => 'Headphones',
                    'ru' => 'Наушники',
                    'uk' => 'Навушники',
                ],
                'keywords' => [
                    'en' => 'Headphones',
                    'ru' => 'Наушники',
                    'uk' => 'Навушники',
                ],
            ]
        ],
        [
            'name' => [
                'en' => 'Apple TV',
                'ru' => 'Apple TV',
                'uk' => 'Apple TV',
            ],
            'photo' => '/vendor/admin-shopify/apple-tv-category-photo.png',
            'properties' => [
                [
                    'name' => [
                        'en' => 'Memory',
                        'ru' => 'Объем памяти',
                        'uk' => 'Обʼєм памʼяті',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => '32GB',
                                'ru' => '32ГБ',
                                'uk' => '32ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '64GB',
                                'ru' => '64ГБ',
                                'uk' => '64ГБ',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => '128GB',
                                'ru' => '128ГБ',
                                'uk' => '128ГБ',
                            ],
                        ],
                    ],
                ],
                [
                    'name' => [
                        'en' => 'Color',
                        'ru' => 'Цвет',
                        'uk' => 'Колір',
                    ],
                    'type' => 'text',
                    'values' => [
                        [
                            'value' => [
                                'en' => 'Black',
                                'ru' => 'Черный',
                                'uk' => 'Чорний',
                            ],
                        ],
                        [
                            'value' => [
                                'en' => 'White',
                                'ru' => 'Белый',
                                'uk' => 'Білий',
                            ],
                        ],
                    ],
                ],
            ],
            'seo' => [
                'slug' => 'apple-tv',
                'title' => [
                    'en' => 'Apple TV',
                    'ru' => 'Apple TV',
                    'uk' => 'Apple TV',
                ],
                'description' => [
                    'en' => 'Apple TV',
                    'ru' => 'Apple TV',
                    'uk' => 'Apple TV',
                ],
                'keywords' => [
                    'en' => 'Apple TV',
                    'ru' => 'Apple TV',
                    'uk' => 'Apple TV',
                ],
            ]
        ]
    ];

    /**
     * @return void
     */
    public function run(): void
    {
        foreach ($this->categories as $category) {
            $newCategory = new ProductCategory();
            $newCategory->name = $category['name'];
            $newCategory->photo = $category['photo'];
            $newCategory->save();
            $i = 0;
            foreach ($category['properties'] as $property) {
                /** @var ProductCategoryProperty $propertyModel */
                $propertyModel = $newCategory->properties()->create([
                    'name' => $property['name'],
                    'type' => $property['type'],
                    'order' => $i,
                ]);

                $ir = 0;
                foreach ($property['values'] as $value) {
                    $propertyModel->propertyValues()->create([
                        'value' => $value['value'],
                        'category_id' => $newCategory->id,
                        'order' => $ir,
                    ]);
                    $ir++;
                }
                $i++;
            }
            $newCategory->seo()->create([
                'slug' => $category['seo']['slug'],
                'title' => $category['seo']['title'],
                'description' => $category['seo']['description'],
                'keywords' => $category['seo']['keywords'],
            ]);
        }
    }
}
