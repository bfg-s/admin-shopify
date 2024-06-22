<?php

namespace Admin\Extend\AdminShopify\Seeders;

use Admin\Core\ModelSaver;
use Admin\Extend\AdminShopify\Models\Product;
use Admin\Extend\AdminShopify\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class ProductsSeeder extends Seeder
{
    protected array $products = [
        [
            'name' => ['en' => 'IPhone 10', 'ru' => 'IPhone 10', 'uk' => 'IPhone 10'],
            'description' => [
                'en' => 'Description about IPhone 10',
                'ru' => 'Описание о IPhone 10',
                'uk' => 'Опис про IPhone 10',
            ],
            'short_description' => [
                'en' => 'Short description about IPhone 10',
                'ru' => 'Краткое описание о IPhone 10',
                'uk' => 'Короткий опис про IPhone 10',
            ],
            'categories' => [1],
            'categoryPropertyValues' => [1,6,14,16,23,29,35,36,37,38],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/iphone-10.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 1000,
                    'discount_price' => 900,
                    'currency_id' => 1,
                ],
                [
                    'price' => 900,
                    'discount_percent' => 10,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'iphone-10',
                'title' => ['en' => 'IPhone 10', 'ru' => 'IPhone 10', 'uk' => 'IPhone 10'],
                'description' => ['en' => 'Description about IPhone 10', 'ru' => 'Описание о IPhone 10', 'uk' => 'Опис про IPhone 10'],
                'keywords' => ['en' => 'IPhone 10', 'ru' => 'IPhone 10', 'uk' => 'IPhone 10'],
            ]
        ],
        [
            'name' => ['en' => 'IPhone 11', 'ru' => 'IPhone 11', 'uk' => 'IPhone 11'],
            'description' => [
                'en' => 'Description about IPhone 11',
                'ru' => 'Описание о IPhone 11',
                'uk' => 'Опис про IPhone 11',
            ],
            'short_description' => [
                'en' => 'Short description about IPhone 11',
                'ru' => 'Краткое описание о IPhone 11',
                'uk' => 'Короткий опис про IPhone 11',
            ],
            'categories' => [1],
            'categoryPropertyValues' => [1,7,15,16,24,25,29,30,35,36,37,38,39,40],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/iphone-11.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 1200,
                    'currency_id' => 1,
                ],
                [
                    'price' => 1100,
                    'discount_price' => 1000,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'iphone-11',
                'title' => ['en' => 'IPhone 11', 'ru' => 'IPhone 11', 'uk' => 'IPhone 11'],
                'description' => ['en' => 'Description about IPhone 11', 'ru' => 'Описание о IPhone 11', 'uk' => 'Опис про IPhone 11'],
                'keywords' => ['en' => 'IPhone 11', 'ru' => 'IPhone 11', 'uk' => 'IPhone 11'],
            ]
        ],
        [
            'name' => ['en' => 'IPhone 12', 'ru' => 'IPhone 12', 'uk' => 'IPhone 12'],
            'description' => [
                'en' => 'Description about IPhone 12',
                'ru' => 'Описание о IPhone 12',
                'uk' => 'Опис про IPhone 12',
            ],
            'short_description' => [
                'en' => 'Short description about IPhone 12',
                'ru' => 'Краткое описание о IPhone 12',
                'uk' => 'Короткий опис про IPhone 12',
            ],
            'categories' => [1],
            'categoryPropertyValues' => [1,6,12,13,15,16,22,23,25,29,30,35,36,37,38,39],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/iphone-12.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 1300,
                    'discount_price' => 1000,
                    'currency_id' => 1,
                ],
                [
                    'price' => 1200,
                    'discount_percent' => 10,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'iphone-12',
                'title' => ['en' => 'IPhone 12', 'ru' => 'IPhone 12', 'uk' => 'IPhone 12'],
                'description' => ['en' => 'Description about IPhone 12', 'ru' => 'Описание о IPhone 12', 'uk' => 'Опис про IPhone 12'],
                'keywords' => ['en' => 'IPhone 12', 'ru' => 'IPhone 12', 'uk' => 'IPhone 12'],
            ]
        ],
        [
            'name' => ['en' => 'IPhone 13', 'ru' => 'IPhone 13', 'uk' => 'IPhone 13'],
            'description' => [
                'en' => 'Description about IPhone 13',
                'ru' => 'Описание о IPhone 13',
                'uk' => 'Опис про IPhone 13',
            ],
            'short_description' => [
                'en' => 'Short description about IPhone 13',
                'ru' => 'Краткое описание о IPhone 13',
                'uk' => 'Короткий опис про IPhone 13',
            ],
            'categories' => [1],
            'categoryPropertyValues' => [1,6,14,16,25,30,35,36,37,38],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/iphone-13.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 1400,
                    'discount_percent' => 10,
                    'currency_id' => 1,
                ],
                [
                    'price' => 1300,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'iphone-13',
                'title' => ['en' => 'IPhone 13', 'ru' => 'IPhone 13', 'uk' => 'IPhone 13'],
                'description' => ['en' => 'Description about IPhone 13', 'ru' => 'Описание о IPhone 13', 'uk' => 'Опис про IPhone 13'],
                'keywords' => ['en' => 'IPhone 13', 'ru' => 'IPhone 13', 'uk' => 'IPhone 13'],
            ]
        ],
        [
            'name' => ['en' => 'IPhone 14', 'ru' => 'IPhone 14', 'uk' => 'IPhone 14'],
            'description' => [
                'en' => 'Description about IPhone 14',
                'ru' => 'Описание о IPhone 14',
                'uk' => 'Опис про IPhone 14',
            ],
            'short_description' => [
                'en' => 'Short description about IPhone 14',
                'ru' => 'Краткое описание о IPhone 14',
                'uk' => 'Короткий опис про IPhone 14',
            ],
            'categories' => [1],
            'categoryPropertyValues' => [1,6,11,12,13,16,23,24,25,29,30,34,35,36,37,38],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/iphone-14.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 1500,
                    'discount_percent' => 15,
                    'currency_id' => 1,
                ],
                [
                    'price' => 1400,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'iphone-14',
                'title' => ['en' => 'IPhone 14', 'ru' => 'IPhone 14', 'uk' => 'IPhone 14'],
                'description' => ['en' => 'Description about IPhone 14', 'ru' => 'Описание о IPhone 14', 'uk' => 'Опис про IPhone 14'],
                'keywords' => ['en' => 'IPhone 14', 'ru' => 'IPhone 14', 'uk' => 'IPhone 14'],
            ]
        ],
        [
            'name' => ['en' => 'IPhone 15', 'ru' => 'IPhone 15', 'uk' => 'IPhone 15'],
            'description' => [
                'en' => 'Description about IPhone 15',
                'ru' => 'Описание о IPhone 15',
                'uk' => 'Опис про IPhone 15',
            ],
            'short_description' => [
                'en' => 'Short description about IPhone 15',
                'ru' => 'Краткое описание о IPhone 15',
                'uk' => 'Короткий опис про IPhone 15',
            ],
            'categories' => [1],
            'categoryPropertyValues' => [1,6,13,14,16,22,23,29,30,34,35,36,37],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/iphone-15.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 1600,
                    'currency_id' => 1,
                ],
                [
                    'price' => 1500,
                    'discount_percent' => 10,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'iphone-15',
                'title' => ['en' => 'IPhone 15', 'ru' => 'IPhone 15', 'uk' => 'IPhone 15'],
                'description' => ['en' => 'Description about IPhone 15', 'ru' => 'Описание о IPhone 15', 'uk' => 'Опис про IPhone 15'],
                'keywords' => ['en' => 'IPhone 15', 'ru' => 'IPhone 15', 'uk' => 'IPhone 15'],
            ]
        ],
        [
            'name' => ['en' => 'MacBook Pro', 'ru' => 'MacBook Pro', 'uk' => 'MacBook Pro'],
            'description' => [
                'en' => 'Description about MacBook Pro',
                'ru' => 'Описание о MacBook Pro',
                'uk' => 'Опис про MacBook Pro',
            ],
            'short_description' => [
                'en' => 'Short description about MacBook Pro',
                'ru' => 'Краткое описание о MacBook Pro',
                'uk' => 'Короткий опис про MacBook Pro',
            ],
            'categories' => [2],
            'categoryPropertyValues' => [41,46,55,58,60,62,63,64,71,72,73,74,75,76,80,87,92,98],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/macbook-pro.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 2000,
                    'currency_id' => 1,
                ],
                [
                    'price' => 1900,
                    'discount_percent' => 5,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'macbook-pro',
                'title' => ['en' => 'MacBook Pro', 'ru' => 'MacBook Pro', 'uk' => 'MacBook Pro'],
                'description' => ['en' => 'Description about MacBook Pro', 'ru' => 'Описание о MacBook Pro', 'uk' => 'Опис про MacBook Pro'],
                'keywords' => ['en' => 'MacBook Pro', 'ru' => 'MacBook Pro', 'uk' => 'MacBook Pro'],
            ]
        ],
        [
            'name' => ['en' => 'MacBook Air', 'ru' => 'MacBook Air', 'uk' => 'MacBook Air'],
            'description' => [
                'en' => 'Description about MacBook Air',
                'ru' => 'Описание о MacBook Air',
                'uk' => 'Опис про MacBook Air',
            ],
            'short_description' => [
                'en' => 'Short description about MacBook Air',
                'ru' => 'Краткое описание о MacBook Air',
                'uk' => 'Короткий опис про MacBook Air',
            ],
            'categories' => [2],
            'categoryPropertyValues' => [41,   46,   54,55,   58,   67,68,   71,72,73,   75,76,77,   81,   86,87,   93,   97,98],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/macbook-air.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 1800,
                    'currency_id' => 1,
                ],
                [
                    'price' => 1700,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'macbook-air',
                'title' => ['en' => 'MacBook Air', 'ru' => 'MacBook Air', 'uk' => 'MacBook Air'],
                'description' => ['en' => 'Description about MacBook Air', 'ru' => 'Описание о MacBook Air', 'uk' => 'Опис про MacBook Air'],
                'keywords' => ['en' => 'MacBook Air', 'ru' => 'MacBook Air', 'uk' => 'MacBook Air'],
            ]
        ],
        [
            'name' => ['en' => 'MacBook M1', 'ru' => 'MacBook M1', 'uk' => 'MacBook M1'],
            'description' => [
                'en' => 'Description about MacBook M1',
                'ru' => 'Описание о MacBook M1',
                'uk' => 'Опис про MacBook M1',
            ],
            'short_description' => [
                'en' => 'Short description about MacBook M1',
                'ru' => 'Краткое описание о MacBook M1',
                'uk' => 'Короткий опис про MacBook M1',
            ],
            'categories' => [2],
            'categoryPropertyValues' => [41,   47,   53,54,55,   58,   62,   72,73,   75,76,   81,   86,87,   90,   97,98],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/macbook-m1.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 2200,
                    'discount_percent' => 5,
                    'currency_id' => 1,
                ],
                [
                    'price' => 2100,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'macbook-m1',
                'title' => ['en' => 'MacBook M1', 'ru' => 'MacBook M1', 'uk' => 'MacBook M1'],
                'description' => ['en' => 'Description about MacBook M1', 'ru' => 'Описание о MacBook M1', 'uk' => 'Опис про MacBook M1'],
                'keywords' => ['en' => 'MacBook M1', 'ru' => 'MacBook M1', 'uk' => 'MacBook M1'],
            ]
        ],
        [
            'name' => ['en' => 'MacBook M2', 'ru' => 'MacBook M2', 'uk' => 'MacBook M2'],
            'description' => [
                'en' => 'Description about MacBook M2',
                'ru' => 'Описание о MacBook M2',
                'uk' => 'Опис про MacBook M2',
            ],
            'short_description' => [
                'en' => 'Short description about MacBook M2',
                'ru' => 'Краткое описание о MacBook M2',
                'uk' => 'Короткий опис про MacBook M2',
            ],
            'categories' => [2],
            'categoryPropertyValues' => [41,   47,   51,52,53,54,55,   58,   63,   73,   74,75,   80,   86,87,   91,   96,97,98],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/macbook-m2.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 2400,
                    'currency_id' => 1,
                ],
                [
                    'price' => 2300,
                    'discount_price' => 2200,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'macbook-m2',
                'title' => ['en' => 'MacBook M2', 'ru' => 'MacBook M2', 'uk' => 'MacBook M2'],
                'description' => ['en' => 'Description about MacBook M2', 'ru' => 'Описание о MacBook M2', 'uk' => 'Опис про MacBook M2'],
                'keywords' => ['en' => 'MacBook M2', 'ru' => 'MacBook M2', 'uk' => 'MacBook M2'],
            ]
        ],
        [
            'name' => ['en' => 'MacBook M3', 'ru' => 'MacBook M3', 'uk' => 'MacBook M3'],
            'description' => [
                'en' => 'Description about MacBook M3',
                'ru' => 'Описание о MacBook M3',
                'uk' => 'Опис про MacBook M3',
            ],
            'short_description' => [
                'en' => 'Short description about MacBook M3',
                'ru' => 'Краткое описание о MacBook M3',
                'uk' => 'Короткий опис про MacBook M3',
            ],
            'categories' => [2],
            'categoryPropertyValues' => [41,   46,   51,52,53,   58,   64,   71,72,73,   74,75,76,   80,   84,85,   92,   94,95],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/macbook-m3.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 2600,
                    'discount_price' => 2100,
                    'currency_id' => 1,
                ],
                [
                    'price' => 2500,
                    'discount_percent' => 5,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'macbook-m3',
                'title' => ['en' => 'MacBook M3', 'ru' => 'MacBook M3', 'uk' => 'MacBook M3'],
                'description' => ['en' => 'Description about MacBook M3', 'ru' => 'Описание о MacBook M3', 'uk' => 'Опис про MacBook M3'],
                'keywords' => ['en' => 'MacBook M3', 'ru' => 'MacBook M3', 'uk' => 'MacBook M3'],
            ]
        ],
        [
            'name' => ['en' => 'IPad Pro', 'ru' => 'IPad Pro', 'uk' => 'IPad Pro'],
            'description' => [
                'en' => 'Description about IPad Pro',
                'ru' => 'Описание о IPad Pro',
                'uk' => 'Опис про IPad Pro',
            ],
            'short_description' => [
                'en' => 'Short description about IPad Pro',
                'ru' => 'Краткое описание о IPad Pro',
                'uk' => 'Короткий опис про IPad Pro',
            ],
            'categories' => [3],
            'categoryPropertyValues' => [99,   105,   109,110,111,112,113,   114,   122,123,   124,125,   132,133,   134,135,136,   140,   144],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/ipad-pro.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 800,
                    'currency_id' => 1,
                ],
                [
                    'price' => 700,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'ipad-pro',
                'title' => ['en' => 'IPad Pro', 'ru' => 'IPad Pro', 'uk' => 'IPad Pro'],
                'description' => ['en' => 'Description about IPad Pro', 'ru' => 'Описание о IPad Pro', 'uk' => 'Опис про IPad Pro'],
                'keywords' => ['en' => 'IPad Pro', 'ru' => 'IPad Pro', 'uk' => 'IPad Pro'],
            ]
        ],
        [
            'name' => ['en' => 'IPad Air', 'ru' => 'IPad Air', 'uk' => 'IPad Air'],
            'description' => [
                'en' => 'Description about IPad Air',
                'ru' => 'Описание о IPad Air',
                'uk' => 'Опис про IPad Air',
            ],
            'short_description' => [
                'en' => 'Short description about IPad Air',
                'ru' => 'Краткое описание о IPad Air',
                'uk' => 'Короткий опис про IPad Air',
            ],
            'categories' => [3],
            'categoryPropertyValues' => [99,   105,   112,113,   114,   121,122,   124,125,   132,133,   134,135,136,137,138,   139,   145],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/ipad-air.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 700,
                    'discount_price' => 600,
                    'currency_id' => 1,
                ],
                [
                    'price' => 600,
                    'discount_percent' => 10,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'ipad-air',
                'title' => ['en' => 'IPad Air', 'ru' => 'IPad Air', 'uk' => 'IPad Air'],
                'description' => ['en' => 'Description about IPad Air', 'ru' => 'Описание о IPad Air', 'uk' => 'Опис про IPad Air'],
                'keywords' => ['en' => 'IPad Air', 'ru' => 'IPad Air', 'uk' => 'IPad Air'],
            ]
        ],
        [
            'name' => ['en' => 'IPad Mini', 'ru' => 'IPad Mini', 'uk' => 'IPad Mini'],
            'description' => [
                'en' => 'Description about IPad Mini',
                'ru' => 'Описание о IPad Mini',
                'uk' => 'Опис про IPad Mini',
            ],
            'short_description' => [
                'en' => 'Short description about IPad Mini',
                'ru' => 'Краткое описание о IPad Mini',
                'uk' => 'Короткий опис про IPad Mini',
            ],
            'categories' => [3],
            'categoryPropertyValues' => [99,   105,   112,113,   114,   121,122,123,   124,125,126,   132,133,   134,135,   139,   146],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/ipad-mini.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 600,
                    'currency_id' => 1,
                ],
                [
                    'price' => 500,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'ipad-mini',
                'title' => ['en' => 'IPad Mini', 'ru' => 'IPad Mini', 'uk' => 'IPad Mini'],
                'description' => ['en' => 'Description about IPad Mini', 'ru' => 'Описание о IPad Mini', 'uk' => 'Опис про IPad Mini'],
                'keywords' => ['en' => 'IPad Mini', 'ru' => 'IPad Mini', 'uk' => 'IPad Mini'],
            ]
        ],
        [
            'name' => ['en' => 'Apple watch 1', 'ru' => 'Apple watch 1', 'uk' => 'Apple watch 1'],
            'description' => [
                'en' => 'Description about Apple watch 1',
                'ru' => 'Описание о Apple watch 1',
                'uk' => 'Опис про Apple watch 1',
            ],
            'short_description' => [
                'en' => 'Short description about Apple watch 1',
                'ru' => 'Краткое описание о Apple watch 1',
                'uk' => 'Короткий опис про Apple watch 1',
            ],
            'categories' => [4],
            'categoryPropertyValues' => [149,   155,   159,160,161,162,163,   164],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/apple-watch-1.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 400,
                    'discount_percent' => 5,
                    'currency_id' => 1,
                ],
                [
                    'price' => 300,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'apple-watch-1',
                'title' => ['en' => 'Apple watch 1', 'ru' => 'Apple watch 1', 'uk' => 'Apple watch 1'],
                'description' => ['en' => 'Description about Apple watch 1', 'ru' => 'Описание о Apple watch 1', 'uk' => 'Опис про Apple watch 1'],
                'keywords' => ['en' => 'Apple watch 1', 'ru' => 'Apple watch 1', 'uk' => 'Apple watch 1'],
            ]
        ],
        [
            'name' => ['en' => 'Apple watch 2', 'ru' => 'Apple watch 2', 'uk' => 'Apple watch 2'],
            'description' => [
                'en' => 'Description about Apple watch 2',
                'ru' => 'Описание о Apple watch 2',
                'uk' => 'Опис про Apple watch 2',
            ],
            'short_description' => [
                'en' => 'Short description about Apple watch 2',
                'ru' => 'Краткое описание о Apple watch 2',
                'uk' => 'Короткий опис про Apple watch 2',
            ],
            'categories' => [4],
            'categoryPropertyValues' => [149,   155,   159,160,161,162,   164],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/apple-watch-2.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 500,
                    'currency_id' => 1,
                ],
                [
                    'price' => 400,
                    'discount_percent' => 20,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'apple-watch-2',
                'title' => ['en' => 'Apple watch 2', 'ru' => 'Apple watch 2', 'uk' => 'Apple watch 2'],
                'description' => ['en' => 'Description about Apple watch 2', 'ru' => 'Описание о Apple watch 2', 'uk' => 'Опис про Apple watch 2'],
                'keywords' => ['en' => 'Apple watch 2', 'ru' => 'Apple watch 2', 'uk' => 'Apple watch 2'],
            ]
        ],
        [
            'name' => ['en' => 'Apple watch 3', 'ru' => 'Apple watch 3', 'uk' => 'Apple watch 3'],
            'description' => [
                'en' => 'Description about Apple watch 3',
                'ru' => 'Описание о Apple watch 3',
                'uk' => 'Опис про Apple watch 3',
            ],
            'short_description' => [
                'en' => 'Short description about Apple watch 3',
                'ru' => 'Краткое описание о Apple watch 3',
                'uk' => 'Короткий опис про Apple watch 3',
            ],
            'categories' => [4],
            'categoryPropertyValues' => [149,   154,   159,160,161,   164],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/apple-watch-3.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 600,
                    'discount_percent' => 20,
                    'currency_id' => 1,
                ],
                [
                    'price' => 500,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'apple-watch-3',
                'title' => ['en' => 'Apple watch 3', 'ru' => 'Apple watch 3', 'uk' => 'Apple watch 3'],
                'description' => ['en' => 'Description about Apple watch 3', 'ru' => 'Описание о Apple watch 3', 'uk' => 'Опис про Apple watch 3'],
                'keywords' => ['en' => 'Apple watch 3', 'ru' => 'Apple watch 3', 'uk' => 'Apple watch 3'],
            ]
        ],
        [
            'name' => ['en' => 'Apple watch 4', 'ru' => 'Apple watch 4', 'uk' => 'Apple watch 4'],
            'description' => [
                'en' => 'Description about Apple watch 4',
                'ru' => 'Описание о Apple watch 4',
                'uk' => 'Опис про Apple watch 4',
            ],
            'short_description' => [
                'en' => 'Short description about Apple watch 4',
                'ru' => 'Краткое описание о Apple watch 4',
                'uk' => 'Короткий опис про Apple watch 4',
            ],
            'categories' => [4],
            'categoryPropertyValues' => [149,   155,   159,160,161,162,163,   164],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/apple-watch-4.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 700,
                    'discount_percent' => 15,
                    'currency_id' => 1,
                ],
                [
                    'price' => 600,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'apple-watch-4',
                'title' => ['en' => 'Apple watch 4', 'ru' => 'Apple watch 4', 'uk' => 'Apple watch 4'],
                'description' => ['en' => 'Description about Apple watch 4', 'ru' => 'Описание о Apple watch 4', 'uk' => 'Опис про Apple watch 4'],
                'keywords' => ['en' => 'Apple watch 4', 'ru' => 'Apple watch 4', 'uk' => 'Apple watch 4'],
            ]
        ],
        [
            'name' => ['en' => 'Apple watch 5', 'ru' => 'Apple watch 5', 'uk' => 'Apple watch 5'],
            'description' => [
                'en' => 'Description about Apple watch 5',
                'ru' => 'Описание о Apple watch 5',
                'uk' => 'Опис про Apple watch 5',
            ],
            'short_description' => [
                'en' => 'Short description about Apple watch 5',
                'ru' => 'Краткое описание о Apple watch 5',
                'uk' => 'Короткий опис про Apple watch 5',
            ],
            'categories' => [4],
            'categoryPropertyValues' => [149,   155,   162,163,   164],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/apple-watch-5.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 800,
                    'currency_id' => 1,
                ],
                [
                    'price' => 700,
                    'discount_price' => 650,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'apple-watch-5',
                'title' => ['en' => 'Apple watch 5', 'ru' => 'Apple watch 5', 'uk' => 'Apple watch 5'],
                'description' => ['en' => 'Description about Apple watch 5', 'ru' => 'Описание о Apple watch 5', 'uk' => 'Опис про Apple watch 5'],
                'keywords' => ['en' => 'Apple watch 5', 'ru' => 'Apple watch 5', 'uk' => 'Apple watch 5'],
            ]
        ],
        [
            'name' => ['en' => 'AirPods', 'ru' => 'AirPods', 'uk' => 'AirPods'],
            'description' => [
                'en' => 'Description about AirPods',
                'ru' => 'Описание о AirPods',
                'uk' => 'Опис про AirPods',
            ],
            'short_description' => [
                'en' => 'Short description about AirPods',
                'ru' => 'Краткое описание о AirPods',
                'uk' => 'Короткий опис про AirPods',
            ],
            'categories' => [5],
            'categoryPropertyValues' => [169,   175],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/airpods.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 200,
                    'discount_price' => 190,
                    'currency_id' => 1,
                ],
                [
                    'price' => 190,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'airpods',
                'title' => ['en' => 'AirPods', 'ru' => 'AirPods', 'uk' => 'AirPods'],
                'description' => ['en' => 'Description about AirPods', 'ru' => 'Описание о AirPods', 'uk' => 'Опис про AirPods'],
                'keywords' => ['en' => 'AirPods', 'ru' => 'AirPods', 'uk' => 'AirPods'],
            ]
        ],
        [
            'name' => ['en' => 'AirPods Pro', 'ru' => 'AirPods Pro', 'uk' => 'AirPods Pro'],
            'description' => [
                'en' => 'Description about AirPods Pro',
                'ru' => 'Описание о AirPods Pro',
                'uk' => 'Опис про AirPods Pro',
            ],
            'short_description' => [
                'en' => 'Short description about AirPods Pro',
                'ru' => 'Краткое описание о AirPods Pro',
                'uk' => 'Короткий опис про AirPods Pro',
            ],
            'categories' => [5],
            'categoryPropertyValues' => [169,   175],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/airpods-pro.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 300,
                    'currency_id' => 1,
                ],
                [
                    'price' => 250,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'airpods-pro',
                'title' => ['en' => 'AirPods Pro', 'ru' => 'AirPods Pro', 'uk' => 'AirPods Pro'],
                'description' => ['en' => 'Description about AirPods Pro', 'ru' => 'Описание о AirPods Pro', 'uk' => 'Опис про AirPods Pro'],
                'keywords' => ['en' => 'AirPods Pro', 'ru' => 'AirPods Pro', 'uk' => 'AirPods Pro'],
            ]
        ],
        [
            'name' => ['en' => 'AirPods Max', 'ru' => 'AirPods Max', 'uk' => 'AirPods Max'],
            'description' => [
                'en' => 'Description about AirPods Max',
                'ru' => 'Описание о AirPods Max',
                'uk' => 'Опис про AirPods Max',
            ],
            'short_description' => [
                'en' => 'Short description about AirPods Max',
                'ru' => 'Краткое описание о AirPods Max',
                'uk' => 'Короткий опис про AirPods Max',
            ],
            'categories' => [5],
            'categoryPropertyValues' => [169,   174],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/airpods-max.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 400,
                    'discount_price' => 350,
                    'currency_id' => 1,
                ],
                [
                    'price' => 350,
                    'discount_percent' => 5,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'airpods-max',
                'title' => ['en' => 'AirPods Max', 'ru' => 'AirPods Max', 'uk' => 'AirPods Max'],
                'description' => ['en' => 'Description about AirPods Max', 'ru' => 'Описание о AirPods Max', 'uk' => 'Опис про AirPods Max'],
                'keywords' => ['en' => 'AirPods Max', 'ru' => 'AirPods Max', 'uk' => 'AirPods Max'],
            ]
        ],
        [
            'name' => ['en' => 'Apple TV 4k', 'ru' => 'Apple TV 4k', 'uk' => 'Apple TV 4k'],
            'description' => [
                'en' => 'Description about Apple TV 4k',
                'ru' => 'Описание о Apple TV 4k',
                'uk' => 'Опис про Apple TV 4k',
            ],
            'short_description' => [
                'en' => 'Short description about Apple TV 4k',
                'ru' => 'Краткое описание о Apple TV 4k',
                'uk' => 'Короткий опис про Apple TV 4k',
            ],
            'categories' => [6],
            'categoryPropertyValues' => [179,180,181,182],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/apple-tv.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 300,
                    'currency_id' => 1,
                ],
                [
                    'price' => 250,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'apple-tv-4k',
                'title' => ['en' => 'Apple TV 4k', 'ru' => 'Apple TV 4k', 'uk' => 'Apple TV 4k'],
                'description' => ['en' => 'Description about Apple TV 4k', 'ru' => 'Описание о Apple TV 4k', 'uk' => 'Опис про Apple TV 4k'],
                'keywords' => ['en' => 'Apple TV 4k', 'ru' => 'Apple TV 4k', 'uk' => 'Apple TV 4k'],
            ]
        ],
        [
            'name' => ['en' => 'Apple TV HD', 'ru' => 'Apple TV HD', 'uk' => 'Apple TV HD'],
            'description' => [
                'en' => 'Description about Apple TV HD',
                'ru' => 'Описание о Apple TV HD',
                'uk' => 'Опис про Apple TV HD',
            ],
            'short_description' => [
                'en' => 'Short description about Apple TV HD',
                'ru' => 'Краткое описание о Apple TV HD',
                'uk' => 'Короткий опис про Apple TV HD',
            ],
            'categories' => [6],
            'categoryPropertyValues' => [179,180,181,183],
            'images' => [
                [
                    'photo' => '/vendor/admin-shopify/apple-tv-hd.png'
                ]
            ],
            'prices' => [
                [
                    'price' => 600,
                    'discount_percent' => 10,
                    'currency_id' => 1,
                ],
                [
                    'price' => 500,
                    'currency_id' => 2,
                ]
            ],
            'seo' => [
                'slug' => 'apple-tv-hd',
                'title' => ['en' => 'Apple TV HD', 'ru' => 'Apple TV HD', 'uk' => 'Apple TV HD'],
                'description' => ['en' => 'Description about Apple TV HD', 'ru' => 'Описание о Apple TV HD', 'uk' => 'Опис про Apple TV HD'],
                'keywords' => ['en' => 'Apple TV HD', 'ru' => 'Apple TV HD', 'uk' => 'Apple TV HD'],
            ]
        ],
    ];

    public function run()
    {
        foreach ($this->products as $product) {

            $product['shop_id'] = 1;
            $product['new'] = !! rand(0,1);
            $product['best_selling'] = !! rand(0,1);
            $product['rating'] = rand(0,5);
            $product['views'] = rand(0,500);

            ModelSaver::do(Product::class, $product);
        }
    }
}
