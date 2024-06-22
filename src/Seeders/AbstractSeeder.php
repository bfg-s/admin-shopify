<?php

namespace Admin\Extend\AdminShopify\Seeders;

use Illuminate\Database\Seeder;
use Stichoza\GoogleTranslate\Exceptions\LargeTextException;
use Stichoza\GoogleTranslate\Exceptions\RateLimitException;
use Stichoza\GoogleTranslate\Exceptions\TranslationRequestException;
use Stichoza\GoogleTranslate\GoogleTranslate;

abstract class AbstractSeeder extends Seeder
{
    /**
     * @param $data
     * @return array
     * @throws LargeTextException
     * @throws RateLimitException
     * @throws TranslationRequestException
     */
    protected function toLang($data): array
    {
        $tr = new GoogleTranslate();
        $result = [];
        foreach (config('admin.languages', []) as $lang) {
            $translateLangTo = $lang == 'ua' ? 'uk' : $lang;
            if ($lang == 'en') {
                $result[$lang] = $data;
            } else {
                $result[$lang] = $tr->setTarget($translateLangTo)->translate($data);
            }
        }
        return $result;
    }
}
