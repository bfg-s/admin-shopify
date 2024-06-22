<?php

namespace Admin\Extend\AdminShopify\Seeders;

use Admin\Extend\AdminShopify\Models\Country;
use Admin\Extend\AdminShopify\Models\Currency;
use Illuminate\Support\Facades\Artisan;

class CountryAndCurrencySeeder extends AbstractSeeder
{
    /**
     * @var array|array[]
     */
    protected array $currencies = [
        [
            'country' => 'United States of America',
            'currency_name' => 'US Dollar',
            'currency_code' => 'USD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'US Dollar',
                'uk' => 'Американський долар',
                'ru' => 'Доллар США',
            ],
        ],
        [
            'country' => 'Andorra',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Afghanistan',
            'currency_name' => 'Afghani',
            'currency_code' => 'AFN',
            'currency_symbol' => '؋',
            'currency_name_lang' => [
                'en' => 'Afghani',
                'uk' => 'Афганський',
                'ru' => 'Афгани',
            ],
        ],
        [
            'country' => 'Albania',
            'currency_name' => 'Lek',
            'currency_code' => 'ALL',
            'currency_symbol' => 'Lek',
            'currency_name_lang' => [
                'en' => 'Lek',
                'uk' => 'Лек',
                'ru' => 'Лек',
            ],
        ],
        [
            'country' => 'Algeria',
            'currency_name' => 'Algerian Dinar',
            'currency_code' => 'DZD',
            'currency_symbol' => 'د.ج',
            'currency_name_lang' => [
                'en' => 'Algerian Dinar',
                'uk' => 'Алжирський динар',
                'ru' => 'Алжирский динар',
            ],
        ],
        [
            'country' => 'Angola',
            'currency_name' => 'Kwanza',
            'currency_code' => 'AOA',
            'currency_symbol' => 'Kz',
            'currency_name_lang' => [
                'en' => 'Kwanza',
                'uk' => 'Перший',
                'ru' => 'Первый',
            ],
        ],
        [
            'country' => 'Antigua and Barbuda',
            'currency_name' => 'East Caribbean Dollar',
            'currency_code' => 'XCD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'East Caribbean Dollar',
                'uk' => 'Східно-карибський долар',
                'ru' => 'Восточнокарибский доллар',
            ],
        ],
        [
            'country' => 'Argentina',
            'currency_name' => 'Argentine Peso',
            'currency_code' => 'ARS',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Argentine Peso',
                'uk' => 'Аргентинське песо',
                'ru' => 'Аргентинское песо',
            ],
        ],
        [
            'country' => 'Armenia',
            'currency_name' => 'Armenian Dram',
            'currency_code' => 'AMD',
            'currency_symbol' => '֏',
            'currency_name_lang' => [
                'en' => 'Armenian Dram',
                'uk' => 'Вірменський драм',
                'ru' => 'Армянский драм',
            ],
        ],
        [
            'country' => 'Australia',
            'currency_name' => 'Australian Dollar',
            'currency_code' => 'AUD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Australian Dollar',
                'uk' => 'Австралійський долар',
                'ru' => 'Австралийский доллар',
            ],
        ],
        [
            'country' => 'Austria',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Azerbaijan',
            'currency_name' => 'Azerbaijan Manat',
            'currency_code' => 'AZN',
            'currency_symbol' => '₼',
            'currency_name_lang' => [
                'en' => 'Azerbaijan Manat',
                'uk' => 'Азербайджанський манат',
                'ru' => 'Азербайджанский манат',
            ],
        ],
        [
            'country' => 'Bahamas',
            'currency_name' => 'Bahamian Dollar',
            'currency_code' => 'BSD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Bahamian Dollar',
                'uk' => 'Багамський долар',
                'ru' => 'Багамский доллар',
            ],
        ],
        [
            'country' => 'Bahrain',
            'currency_name' => 'Bahraini Dinar',
            'currency_code' => 'BHD',
            'currency_symbol' => '.د.ب',
            'currency_name_lang' => [
                'en' => 'Bahraini Dinar',
                'uk' => 'Бахрейнський динар',
                'ru' => 'Бахрейнский динар',
            ],
        ],
        [
            'country' => 'Bangladesh',
            'currency_name' => 'Taka',
            'currency_code' => 'BDT',
            'currency_symbol' => '৳',
            'currency_name_lang' => [
                'en' => 'Taka',
                'uk' => 'Брати',
                'ru' => 'Брать',
            ],
        ],
        [
            'country' => 'Barbados',
            'currency_name' => 'Barbados Dollar',
            'currency_code' => 'BBD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Barbados Dollar',
                'uk' => 'Барбадоський долар',
                'ru' => 'Барбадосский доллар',
            ],
        ],
        [
            'country' => 'Belarus',
            'currency_name' => 'Belarusian Ruble',
            'currency_code' => 'BYN',
            'currency_symbol' => 'Br',
            'currency_name_lang' => [
                'en' => 'Belarusian Ruble',
                'uk' => 'Білоруський рубль',
                'ru' => 'Белорусский рубль',
            ],
        ],
        [
            'country' => 'Belgium',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Belize',
            'currency_name' => 'Belize Dollar',
            'currency_code' => 'BZD',
            'currency_symbol' => 'BZ$',
            'currency_name_lang' => [
                'en' => 'Belize Dollar',
                'uk' => 'Белізький долар',
                'ru' => 'Белизский доллар',
            ],
        ],
        [
            'country' => 'Benin',
            'currency_name' => 'CFA Franc BCEAO',
            'currency_code' => 'XOF',
            'currency_symbol' => 'Fr',
            'currency_name_lang' => [
                'en' => 'CFA Franc BCEAO',
                'uk' => 'Франк CFA BCEAO',
                'ru' => 'Франк КФА BCEAO',
            ],
        ],
        [
            'country' => 'Bhutan',
            'currency_name' => 'Ngultrum',
            'currency_code' => 'BTN',
            'currency_symbol' => 'Nu.',
            'currency_name_lang' => [
                'en' => 'Ngultrum',
                'uk' => 'Нгултрум',
                'ru' => 'Нгултрум',
            ],
        ],
        [
            'country' => 'Bolivia',
            'currency_name' => 'Boliviano',
            'currency_code' => 'BOB',
            'currency_symbol' => 'Bs',
            'currency_name_lang' => [
                'en' => 'Boliviano',
                'uk' => 'Болівійський',
                'ru' => 'Боливийский',
            ],
        ],
        [
            'country' => 'Bosnia and Herzegovina',
            'currency_name' => 'Convertible Mark',
            'currency_code' => 'BAM',
            'currency_symbol' => 'KM',
            'currency_name_lang' => [
                'en' => 'Convertible Mark',
                'uk' => 'Конвертована марка',
                'ru' => 'Конвертируемая марка',
            ],
        ],
        [
            'country' => 'Botswana',
            'currency_name' => 'Pula',
            'currency_code' => 'BWP',
            'currency_symbol' => 'P',
            'currency_name_lang' => [
                'en' => 'Pula',
                'uk' => 'Пула',
                'ru' => 'Пула',
            ],
        ],
        [
            'country' => 'Brazil',
            'currency_name' => 'Brazilian Real',
            'currency_code' => 'BRL',
            'currency_symbol' => 'R$',
            'currency_name_lang' => [
                'en' => 'Brazilian Real',
                'uk' => 'Бразильський реал',
                'ru' => 'Бразильский Реал',
            ],
        ],
        [
            'country' => 'Brunei Darussalam',
            'currency_name' => 'Brunei Dollar',
            'currency_code' => 'BND',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Brunei Dollar',
                'uk' => 'Брунейський долар',
                'ru' => 'Брунейский доллар',
            ],
        ],
        [
            'country' => 'Bulgaria',
            'currency_name' => 'Bulgarian Lev',
            'currency_code' => 'BGN',
            'currency_symbol' => 'лв',
            'currency_name_lang' => [
                'en' => 'Bulgarian Lev',
                'uk' => 'Болгарський лев',
                'ru' => 'Болгарский лев',
            ],
        ],
        [
            'country' => 'Burkina Faso',
            'currency_name' => 'CFA Franc BCEAO',
            'currency_code' => 'XOF',
            'currency_symbol' => 'Fr',
            'currency_name_lang' => [
                'en' => 'CFA Franc BCEAO',
                'uk' => 'Франк CFA BCEAO',
                'ru' => 'Франк КФА BCEAO',
            ],
        ],
        [
            'country' => 'Burundi',
            'currency_name' => 'Burundi Franc',
            'currency_code' => 'BIF',
            'currency_symbol' => 'FBu',
            'currency_name_lang' => [
                'en' => 'Burundi Franc',
                'uk' => 'Бурундійський франк',
                'ru' => 'Бурундийский франк',
            ],
        ],
        [
            'country' => 'Cabo Verde',
            'currency_name' => 'Cabo Verde Escudo',
            'currency_code' => 'CVE',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Cabo Verde Escudo',
                'uk' => 'Щит Кабо-Верде',
                'ru' => 'Щит Кабо-Верде',
            ],
        ],
        [
            'country' => 'Cambodia',
            'currency_name' => 'Riel',
            'currency_code' => 'KHR',
            'currency_symbol' => '៛',
            'currency_name_lang' => [
                'en' => 'Riel',
                'uk' => 'Ріель',
                'ru' => 'Риель',
            ],
        ],
        [
            'country' => 'Cameroon',
            'currency_name' => 'CFA Franc BEAC',
            'currency_code' => 'XAF',
            'currency_symbol' => 'Fr',
            'currency_name_lang' => [
                'en' => 'CFA Franc BEAC',
                'uk' => 'Франк CFA BEAC',
                'ru' => 'Франк КФА BEAC',
            ],
        ],
        [
            'country' => 'Canada',
            'currency_name' => 'Canadian Dollar',
            'currency_code' => 'CAD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Canadian Dollar',
                'uk' => 'Канадський долар',
                'ru' => 'Канадский доллар',
            ],
        ],
        [
            'country' => 'Central African Republic',
            'currency_name' => 'CFA Franc BEAC',
            'currency_code' => 'XAF',
            'currency_symbol' => 'Fr',
            'currency_name_lang' => [
                'en' => 'CFA Franc BEAC',
                'uk' => 'Франк CFA BEAC',
                'ru' => 'Франк КФА BEAC',
            ],
        ],
        [
            'country' => 'Chad',
            'currency_name' => 'CFA Franc BEAC',
            'currency_code' => 'XAF',
            'currency_symbol' => 'Fr',
            'currency_name_lang' => [
                'en' => 'CFA Franc BEAC',
                'uk' => 'Франк CFA BEAC',
                'ru' => 'Франк КФА BEAC',
            ],
        ],
        [
            'country' => 'Chile',
            'currency_name' => 'Chilean Peso',
            'currency_code' => 'CLP',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Chilean Peso',
                'uk' => 'Чилійський песо',
                'ru' => 'Чилийское песо',
            ],
        ],
        [
            'country' => 'China',
            'currency_name' => 'Yuan Renminbi',
            'currency_code' => 'CNY',
            'currency_symbol' => '¥',
            'currency_name_lang' => [
                'en' => 'Yuan Renminbi',
                'uk' => 'Юань ром юань',
                'ru' => 'Юань ром юань',
            ],
        ],
        [
            'country' => 'Colombia',
            'currency_name' => 'Colombian Peso',
            'currency_code' => 'COP',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Colombian Peso',
                'uk' => 'Колумбійський песо',
                'ru' => 'Колумбийское песо',
            ],
        ],
        [
            'country' => 'Comoros',
            'currency_name' => 'Comoro Franc',
            'currency_code' => 'KMF',
            'currency_symbol' => 'Fr',
            'currency_name_lang' => [
                'en' => 'Comoro Franc',
                'uk' => 'Коморський франк',
                'ru' => 'Коморский франк',
            ],
        ],
        [
            'country' => 'Congo',
            'currency_name' => 'CFA Franc BEAC',
            'currency_code' => 'XAF',
            'currency_symbol' => 'Fr',
            'currency_name_lang' => [
                'en' => 'CFA Franc BEAC',
                'uk' => 'Франк CFA BEAC',
                'ru' => 'Франк КФА BEAC',
            ],
        ],
        [
            'country' => 'Costa Rica',
            'currency_name' => 'Costa Rican Colon',
            'currency_code' => 'CRC',
            'currency_symbol' => '₡',
            'currency_name_lang' => [
                'en' => 'Costa Rican Colon',
                'uk' => 'Коста-риканський колон',
                'ru' => 'Костариканский колон',
            ],
        ],
        [
            'country' => 'Croatia',
            'currency_name' => 'Kuna',
            'currency_code' => 'HRK',
            'currency_symbol' => 'kn',
            'currency_name_lang' => [
                'en' => 'Kuna',
                'uk' => 'Існує',
                'ru' => 'Есть',
            ],
        ],
        [
            'country' => 'Cuba',
            'currency_name' => 'Cuban Peso',
            'currency_code' => 'CUP',
            'currency_symbol' => '₱',
            'currency_name_lang' => [
                'en' => 'Cuban Peso',
                'uk' => 'Кубинське песо',
                'ru' => 'Кубинское песо',
            ],
        ],
        [
            'country' => 'Cyprus',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Czechia',
            'currency_name' => 'Czech Koruna',
            'currency_code' => 'CZK',
            'currency_symbol' => 'Kč',
            'currency_name_lang' => [
                'en' => 'Czech Koruna',
                'uk' => 'Чеська крона',
                'ru' => 'Чешская крона',
            ],
        ],
        [
            'country' => 'Denmark',
            'currency_name' => 'Danish Krone',
            'currency_code' => 'DKK',
            'currency_symbol' => 'kr',
            'currency_name_lang' => [
                'en' => 'Danish Krone',
                'uk' => 'Датська крона',
                'ru' => 'Датская крона',
            ],
        ],
        [
            'country' => 'Djibouti',
            'currency_name' => 'Djibouti Franc',
            'currency_code' => 'DJF',
            'currency_symbol' => 'Fdj',
            'currency_name_lang' => [
                'en' => 'Djibouti Franc',
                'uk' => 'Франк Джибуті',
                'ru' => 'Джибутийский франк',
            ],
        ],
        [
            'country' => 'Dominica',
            'currency_name' => 'East Caribbean Dollar',
            'currency_code' => 'XCD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'East Caribbean Dollar',
                'uk' => 'Східно-карибський долар',
                'ru' => 'Восточнокарибский доллар',
            ],
        ],
        [
            'country' => 'Dominican Republic',
            'currency_name' => 'Dominican Peso',
            'currency_code' => 'DOP',
            'currency_symbol' => 'RD$',
            'currency_name_lang' => [
                'en' => 'Dominican Peso',
                'uk' => 'Домініканський песо',
                'ru' => 'Доминиканское песо',
            ],
        ],
        [
            'country' => 'Ecuador',
            'currency_name' => 'US Dollar',
            'currency_code' => 'USD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'US Dollar',
                'uk' => 'Американський долар',
                'ru' => 'Доллар США',
            ],
        ],
        [
            'country' => 'Egypt',
            'currency_name' => 'Egyptian Pound',
            'currency_code' => 'EGP',
            'currency_symbol' => '£',
            'currency_name_lang' => [
                'en' => 'Egyptian Pound',
                'uk' => 'Єгипетський фунт',
                'ru' => 'Египетский фунт',
            ],
        ],
        [
            'country' => 'El Salvador',
            'currency_name' => 'El Salvador Colon',
            'currency_code' => 'SVC',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'El Salvador Colon',
                'uk' => 'Сальвадорський колон',
                'ru' => 'Сальвадор Колон',
            ],
        ],
        [
            'country' => 'Equatorial Guinea',
            'currency_name' => 'CFA Franc BEAC',
            'currency_code' => 'XAF',
            'currency_symbol' => 'Fr',
            'currency_name_lang' => [
                'en' => 'CFA Franc BEAC',
                'uk' => 'Франк CFA BEAC',
                'ru' => 'Франк КФА BEAC',
            ],
        ],
        [
            'country' => 'Eritrea',
            'currency_name' => 'Nakfa',
            'currency_code' => 'ERN',
            'currency_symbol' => 'Nfk',
            'currency_name_lang' => [
                'en' => 'Nakfa',
                'uk' => 'Накфа',
                'ru' => 'Накфа',
            ],
        ],
        [
            'country' => 'Estonia',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Eswatini',
            'currency_name' => 'Lilangeni',
            'currency_code' => 'SZL',
            'currency_symbol' => 'E',
            'currency_name_lang' => [
                'en' => 'Lilangeni',
                'uk' => 'Лілангені',
                'ru' => 'Лилангени',
            ],
        ],
        [
            'country' => 'Ethiopia',
            'currency_name' => 'Ethiopian Birr',
            'currency_code' => 'ETB',
            'currency_symbol' => 'Br',
            'currency_name_lang' => [
                'en' => 'Ethiopian Birr',
                'uk' => 'Ефіопський бір',
                'ru' => 'Эфиопский быр',
            ],
        ],
        [
            'country' => 'Fiji',
            'currency_name' => 'Fiji Dollar',
            'currency_code' => 'FJD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Fiji Dollar',
                'uk' => 'Долар Фіджі',
                'ru' => 'Фиджийский доллар',
            ],
        ],
        [
            'country' => 'Finland',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'France',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Gabon',
            'currency_name' => 'CFA Franc BEAC',
            'currency_code' => 'XAF',
            'currency_symbol' => 'Fr',
            'currency_name_lang' => [
                'en' => 'CFA Franc BEAC',
                'uk' => 'Франк CFA BEAC',
                'ru' => 'Франк КФА BEAC',
            ],
        ],
        [
            'country' => 'Gambia',
            'currency_name' => 'Dalasi',
            'currency_code' => 'GMD',
            'currency_symbol' => 'D',
            'currency_name_lang' => [
                'en' => 'Dalasi',
                'uk' => 'Далас',
                'ru' => 'Далас',
            ],
        ],
        [
            'country' => 'Georgia',
            'currency_name' => 'Lari',
            'currency_code' => 'GEL',
            'currency_symbol' => 'ლ',
            'currency_name_lang' => [
                'en' => 'Lari',
                'uk' => 'Втекти',
                'ru' => 'Убегать',
            ],
        ],
        [
            'country' => 'Germany',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Ghana',
            'currency_name' => 'Ghana Cedi',
            'currency_code' => 'GHS',
            'currency_symbol' => '¢',
            'currency_name_lang' => [
                'en' => 'Ghana Cedi',
                'uk' => 'Ганський седі',
                'ru' => 'Гана Седи',
            ],
        ],
        [
            'country' => 'Greece',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Grenada',
            'currency_name' => 'East Caribbean Dollar',
            'currency_code' => 'XCD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'East Caribbean Dollar',
                'uk' => 'Східно-карибський долар',
                'ru' => 'Восточнокарибский доллар',
            ],
        ],
        [
            'country' => 'Guatemala',
            'currency_name' => 'Quetzal',
            'currency_code' => 'GTQ',
            'currency_symbol' => 'Q',
            'currency_name_lang' => [
                'en' => 'Quetzal',
                'uk' => 'Кетцаль',
                'ru' => 'Кецаль',
            ],
        ],
        [
            'country' => 'Guinea',
            'currency_name' => 'Guinean Franc',
            'currency_code' => 'GNF',
            'currency_symbol' => 'Fr',
            'currency_name_lang' => [
                'en' => 'Guinean Franc',
                'uk' => 'Гвінейський франк',
                'ru' => 'Гвинейский франк',
            ],
        ],
        [
            'country' => 'Guinea-Bissau',
            'currency_name' => 'CFA Franc BCEAO',
            'currency_code' => 'XOF',
            'currency_symbol' => 'Fr',
            'currency_name_lang' => [
                'en' => 'CFA Franc BCEAO',
                'uk' => 'Франк CFA BCEAO',
                'ru' => 'Франк КФА BCEAO',
            ],
        ],
        [
            'country' => 'Guyana',
            'currency_name' => 'Guyana Dollar',
            'currency_code' => 'GYD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Guyana Dollar',
                'uk' => 'Гайанський долар',
                'ru' => 'Гайанский доллар',
            ],
        ],
        [
            'country' => 'Haiti',
            'currency_name' => 'Gourde',
            'currency_code' => 'HTG',
            'currency_symbol' => 'G',
            'currency_name_lang' => [
                'en' => 'Gourde',
                'uk' => 'Гоурд',
                'ru' => 'Гоурд',
            ],
        ],
        [
            'country' => 'Holy See',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Honduras',
            'currency_name' => 'Lempira',
            'currency_code' => 'HNL',
            'currency_symbol' => 'L',
            'currency_name_lang' => [
                'en' => 'Lempira',
                'uk' => 'Лемпіра',
                'ru' => 'Лемпира',
            ],
        ],
        [
            'country' => 'Hungary',
            'currency_name' => 'Forint',
            'currency_code' => 'HUF',
            'currency_symbol' => 'Ft',
            'currency_name_lang' => [
                'en' => 'Forint',
                'uk' => 'Форінтів',
                'ru' => 'Форинтов',
            ],
        ],
        [
            'country' => 'Iceland',
            'currency_name' => 'Iceland Krona',
            'currency_code' => 'ISK',
            'currency_symbol' => 'kr',
            'currency_name_lang' => [
                'en' => 'Iceland Krona',
                'uk' => 'Ісландська крона',
                'ru' => 'Исландская крона',
            ],
        ],
        [
            'country' => 'India',
            'currency_name' => 'Indian Rupee',
            'currency_code' => 'INR',
            'currency_symbol' => '₹',
            'currency_name_lang' => [
                'en' => 'Indian Rupee',
                'uk' => 'Індійська рупія',
                'ru' => 'Индийская рупия',
            ],
        ],
        [
            'country' => 'Indonesia',
            'currency_name' => 'Rupiah',
            'currency_code' => 'IDR',
            'currency_symbol' => 'Rp',
            'currency_name_lang' => [
                'en' => 'Rupiah',
                'uk' => 'Рупія',
                'ru' => 'Рупия',
            ],
        ],
        [
            'country' => 'Iran',
            'currency_name' => 'Iranian Rial',
            'currency_code' => 'IRR',
            'currency_symbol' => '﷼',
            'currency_name_lang' => [
                'en' => 'Iranian Rial',
                'uk' => 'Іранський ріал',
                'ru' => 'Иранский риал',
            ],
        ],
        [
            'country' => 'Iraq',
            'currency_name' => 'Iraqi Dinar',
            'currency_code' => 'IQD',
            'currency_symbol' => 'ع.د',
            'currency_name_lang' => [
                'en' => 'Iraqi Dinar',
                'uk' => 'Іракський динар',
                'ru' => 'Иракский динар',
            ],
        ],
        [
            'country' => 'Ireland',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Israel',
            'currency_name' => 'New Israeli Sheqel',
            'currency_code' => 'ILS',
            'currency_symbol' => '₪',
            'currency_name_lang' => [
                'en' => 'New Israeli Sheqel',
                'uk' => 'Новий ізраїльський шекель',
                'ru' => 'Новый израильский шекель',
            ],
        ],
        [
            'country' => 'Italy',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Jamaica',
            'currency_name' => 'Jamaican Dollar',
            'currency_code' => 'JMD',
            'currency_symbol' => 'J$',
            'currency_name_lang' => [
                'en' => 'Jamaican Dollar',
                'uk' => 'Ямайський долар',
                'ru' => 'Ямайский доллар',
            ],
        ],
        [
            'country' => 'Japan',
            'currency_name' => 'Yen',
            'currency_code' => 'JPY',
            'currency_symbol' => '¥',
            'currency_name_lang' => [
                'en' => 'Yen',
                'uk' => 'Єна',
                'ru' => 'Йена',
            ],
        ],
        [
            'country' => 'Jordan',
            'currency_name' => 'Jordanian Dinar',
            'currency_code' => 'JOD',
            'currency_symbol' => 'د.ا',
            'currency_name_lang' => [
                'en' => 'Jordanian Dinar',
                'uk' => 'Йорданський динар',
                'ru' => 'Иорданский динар',
            ],
        ],
        [
            'country' => 'Kazakhstan',
            'currency_name' => 'Tenge',
            'currency_code' => 'KZT',
            'currency_symbol' => '〒',
            'currency_name_lang' => [
                'en' => 'Tenge',
                'uk' => 'Тенге',
                'ru' => 'Тенге',
            ],
        ],
        [
            'country' => 'Kenya',
            'currency_name' => 'Kenyan Shilling',
            'currency_code' => 'KES',
            'currency_symbol' => 'KSh',
            'currency_name_lang' => [
                'en' => 'Kenyan Shilling',
                'uk' => 'Кенійський шилінг',
                'ru' => 'Кенийский шиллинг',
            ],
        ],
        [
            'country' => 'Kiribati',
            'currency_name' => 'Australian Dollar',
            'currency_code' => 'AUD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Australian Dollar',
                'uk' => 'Австралійський долар',
                'ru' => 'Австралийский доллар',
            ],
        ],
        [
            'country' => 'Korea (Democratic People\'s Republic of)',
            'currency_name' => 'North Korean Won',
            'currency_code' => 'KPW',
            'currency_symbol' => '₩',
            'currency_name_lang' => [
                'en' => 'North Korean Won',
                'uk' => 'Північнокорейська вона',
                'ru' => 'Северокорейская вона',
            ],
        ],
        [
            'country' => 'Korea (Republic of)',
            'currency_name' => 'Won',
            'currency_code' => 'KRW',
            'currency_symbol' => '₩',
            'currency_name_lang' => [
                'en' => 'Won',
                'uk' => 'Вон',
                'ru' => 'Вон',
            ],
        ],
        [
            'country' => 'Kuwait',
            'currency_name' => 'Kuwaiti Dinar',
            'currency_code' => 'KWD',
            'currency_symbol' => 'د.ك',
            'currency_name_lang' => [
                'en' => 'Kuwaiti Dinar',
                'uk' => 'Кувейтський динар',
                'ru' => 'Кувейтский динар',
            ],
        ],
        [
            'country' => 'Kyrgyzstan',
            'currency_name' => 'Som',
            'currency_code' => 'KGS',
            'currency_symbol' => 'с',
            'currency_name_lang' => [
                'en' => 'Som',
                'uk' => 'Сом',
                'ru' => 'Сом',
            ],
        ],
        [
            'country' => 'Lao People\'s Democratic Republic',
            'currency_name' => 'Lao Kip',
            'currency_code' => 'LAK',
            'currency_symbol' => '₭',
            'currency_name_lang' => [
                'en' => 'Lao Kip',
                'uk' => 'Лаоський кіп',
                'ru' => 'Лао Кип',
            ],
        ],
        [
            'country' => 'Latvia',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Lebanon',
            'currency_name' => 'Lebanese Pound',
            'currency_code' => 'LBP',
            'currency_symbol' => 'ل.ل',
            'currency_name_lang' => [
                'en' => 'Lebanese Pound',
                'uk' => 'Ліванський фунт',
                'ru' => 'Ливанский фунт',
            ],
        ],
        [
            'country' => 'Lesotho',
            'currency_name' => 'Loti',
            'currency_code' => 'LSL',
            'currency_symbol' => 'L',
            'currency_name_lang' => [
                'en' => 'Loti',
                'uk' => 'Лот',
                'ru' => 'Много',
            ],
        ],
        [
            'country' => 'Liberia',
            'currency_name' => 'Liberian Dollar',
            'currency_code' => 'LRD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Liberian Dollar',
                'uk' => 'Ліберійський долар',
                'ru' => 'Либерийский доллар',
            ],
        ],
        [
            'country' => 'Libya',
            'currency_name' => 'Libyan Dinar',
            'currency_code' => 'LYD',
            'currency_symbol' => 'ل.د',
            'currency_name_lang' => [
                'en' => 'Libyan Dinar',
                'uk' => 'Лівійський динар',
                'ru' => 'Ливийский динар',
            ],
        ],
        [
            'country' => 'Liechtenstein',
            'currency_name' => 'Swiss Franc',
            'currency_code' => 'CHF',
            'currency_symbol' => 'CHF',
            'currency_name_lang' => [
                'en' => 'Swiss Franc',
                'uk' => 'Швейцарський франк',
                'ru' => 'Швейцарский франк',
            ],
        ],
        [
            'country' => 'Lithuania',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Luxembourg',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Madagascar',
            'currency_name' => 'Malagasy Ariary',
            'currency_code' => 'MGA',
            'currency_symbol' => 'Ar',
            'currency_name_lang' => [
                'en' => 'Malagasy Ariary',
                'uk' => 'Малагасійський аріар',
                'ru' => 'Малагасийский ариари',
            ],
        ],
        [
            'country' => 'Malawi',
            'currency_name' => 'Kwacha',
            'currency_code' => 'MWK',
            'currency_symbol' => 'MK',
            'currency_name_lang' => [
                'en' => 'Kwacha',
                'uk' => 'Квача',
                'ru' => 'Квача',
            ],
        ],
        [
            'country' => 'Malaysia',
            'currency_name' => 'Malaysian Ringgit',
            'currency_code' => 'MYR',
            'currency_symbol' => 'RM',
            'currency_name_lang' => [
                'en' => 'Malaysian Ringgit',
                'uk' => 'Малайзійський рингіт',
                'ru' => 'Малазийский ринггит',
            ],
        ],
        [
            'country' => 'Maldives',
            'currency_name' => 'Rufiyaa',
            'currency_code' => 'MVR',
            'currency_symbol' => 'ރ.',
            'currency_name_lang' => [
                'en' => 'Rufiyaa',
                'uk' => 'Руфія',
                'ru' => 'Руфия',
            ],
        ],
        [
            'country' => 'Mali',
            'currency_name' => 'CFA Franc BCEAO',
            'currency_code' => 'XOF',
            'currency_symbol' => 'Fr',
            'currency_name_lang' => [
                'en' => 'CFA Franc BCEAO',
                'uk' => 'Франк CFA BCEAO',
                'ru' => 'Франк КФА BCEAO',
            ],
        ],
        [
            'country' => 'Malta',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Marshall Islands',
            'currency_name' => 'US Dollar',
            'currency_code' => 'USD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'US Dollar',
                'uk' => 'Американський долар',
                'ru' => 'Доллар США',
            ],
        ],
        [
            'country' => 'Mauritania',
            'currency_name' => 'Ouguiya',
            'currency_code' => 'MRU',
            'currency_symbol' => 'UM',
            'currency_name_lang' => [
                'en' => 'Ouguiya',
                'uk' => 'OU дорогий',
                'ru' => 'ОУ стоит дорого',
            ],
        ],
        [
            'country' => 'Mauritius',
            'currency_name' => 'Mauritius Rupee',
            'currency_code' => 'MUR',
            'currency_symbol' => '₨',
            'currency_name_lang' => [
                'en' => 'Mauritius Rupee',
                'uk' => 'Маврикійська рупія',
                'ru' => 'Маврикийская рупия',
            ],
        ],
        [
            'country' => 'Mexico',
            'currency_name' => 'Mexican Peso',
            'currency_code' => 'MXN',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Mexican Peso',
                'uk' => 'Мексиканське песо',
                'ru' => 'Мексиканское песо',
            ],
        ],
        [
            'country' => 'Micronesia (Federated States of)',
            'currency_name' => 'US Dollar',
            'currency_code' => 'USD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'US Dollar',
                'uk' => 'Американський долар',
                'ru' => 'Доллар США',
            ],
        ],
        [
            'country' => 'Moldova (Republic of)',
            'currency_name' => 'Moldovan Leu',
            'currency_code' => 'MDL',
            'currency_symbol' => 'L',
            'currency_name_lang' => [
                'en' => 'Moldovan Leu',
                'uk' => 'Молдаванин Лев',
                'ru' => 'Молдавский Лев',
            ],
        ],
        [
            'country' => 'Monaco',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Mongolia',
            'currency_name' => 'Tugrik',
            'currency_code' => 'MNT',
            'currency_symbol' => '₮',
            'currency_name_lang' => [
                'en' => 'Tugrik',
                'uk' => 'Тугрик',
                'ru' => 'Тугрик',
            ],
        ],
        [
            'country' => 'Montenegro',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Morocco',
            'currency_name' => 'Moroccan Dirham',
            'currency_code' => 'MAD',
            'currency_symbol' => 'د.م.',
            'currency_name_lang' => [
                'en' => 'Moroccan Dirham',
                'uk' => 'Марокканський дирхам',
                'ru' => 'Марокканский дирхам',
            ],
        ],
        [
            'country' => 'Mozambique',
            'currency_name' => 'Mozambique Metical',
            'currency_code' => 'MZN',
            'currency_symbol' => 'MT',
            'currency_name_lang' => [
                'en' => 'Mozambique Metical',
                'uk' => 'Мозамбік метикал',
                'ru' => 'Мозамбик Метикал',
            ],
        ],
        [
            'country' => 'Myanmar',
            'currency_name' => 'Kyat',
            'currency_code' => 'MMK',
            'currency_symbol' => 'Ks',
            'currency_name_lang' => [
                'en' => 'Kyat',
                'uk' => 'К\'ят',
                'ru' => 'Кьят',
            ],
        ],
        [
            'country' => 'Namibia',
            'currency_name' => 'Namibia Dollar',
            'currency_code' => 'NAD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Namibia Dollar',
                'uk' => 'Намібійський долар',
                'ru' => 'Намибийский доллар',
            ],
        ],
        [
            'country' => 'Nauru',
            'currency_name' => 'Australian Dollar',
            'currency_code' => 'AUD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Australian Dollar',
                'uk' => 'Австралійський долар',
                'ru' => 'Австралийский доллар',
            ],
        ],
        [
            'country' => 'Nepal',
            'currency_name' => 'Nepalese Rupee',
            'currency_code' => 'NPR',
            'currency_symbol' => '₨',
            'currency_name_lang' => [
                'en' => 'Nepalese Rupee',
                'uk' => 'Непальська рупія',
                'ru' => 'Непальская рупия',
            ],
        ],
        [
            'country' => 'Netherlands',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'New Zealand',
            'currency_name' => 'New Zealand Dollar',
            'currency_code' => 'NZD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'New Zealand Dollar',
                'uk' => 'Новозеландський долар',
                'ru' => 'Новозеландский доллар',
            ],
        ],
        [
            'country' => 'Nicaragua',
            'currency_name' => 'Cordoba Oro',
            'currency_code' => 'NIO',
            'currency_symbol' => 'C$',
            'currency_name_lang' => [
                'en' => 'Cordoba Oro',
                'uk' => 'Cordoba Gold',
                'ru' => 'Кордова Голд',
            ],
        ],
        [
            'country' => 'Niger',
            'currency_name' => 'CFA Franc BCEAO',
            'currency_code' => 'XOF',
            'currency_symbol' => 'Fr',
            'currency_name_lang' => [
                'en' => 'CFA Franc BCEAO',
                'uk' => 'Франк CFA BCEAO',
                'ru' => 'Франк КФА BCEAO',
            ],
        ],
        [
            'country' => 'Nigeria',
            'currency_name' => 'Naira',
            'currency_code' => 'NGN',
            'currency_symbol' => '₦',
            'currency_name_lang' => [
                'en' => 'Naira',
                'uk' => 'Найра',
                'ru' => 'Наира',
            ],
        ],
        [
            'country' => 'North Macedonia',
            'currency_name' => 'Denar',
            'currency_code' => 'MKD',
            'currency_symbol' => 'ден',
            'currency_name_lang' => [
                'en' => 'Denar',
                'uk' => 'Денар',
                'ru' => 'Денар',
            ],
        ],
        [
            'country' => 'Norway',
            'currency_name' => 'Norwegian Krone',
            'currency_code' => 'NOK',
            'currency_symbol' => 'kr',
            'currency_name_lang' => [
                'en' => 'Norwegian Krone',
                'uk' => 'Норвезька крона',
                'ru' => 'Норвежская крона',
            ],
        ],
        [
            'country' => 'Oman',
            'currency_name' => 'Rial Omani',
            'currency_code' => 'OMR',
            'currency_symbol' => 'ر.ع.',
            'currency_name_lang' => [
                'en' => 'Rial Omani',
                'uk' => 'Оманський ріал',
                'ru' => 'Риал Омани',
            ],
        ],
        [
            'country' => 'Pakistan',
            'currency_name' => 'Pakistan Rupee',
            'currency_code' => 'PKR',
            'currency_symbol' => '₨',
            'currency_name_lang' => [
                'en' => 'Pakistan Rupee',
                'uk' => 'Пакистанська рупія',
                'ru' => 'Пакистанская рупия',
            ],
        ],
        [
            'country' => 'Palau',
            'currency_name' => 'US Dollar',
            'currency_code' => 'USD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'US Dollar',
                'uk' => 'Американський долар',
                'ru' => 'Доллар США',
            ],
        ],
        [
            'country' => 'Panama',
            'currency_name' => 'Balboa',
            'currency_code' => 'PAB',
            'currency_symbol' => 'B/.',
            'currency_name_lang' => [
                'en' => 'Balboa',
                'uk' => 'Бальбоа',
                'ru' => 'Бальбоа',
            ],
        ],
        [
            'country' => 'Papua New Guinea',
            'currency_name' => 'Kina',
            'currency_code' => 'PGK',
            'currency_symbol' => 'K',
            'currency_name_lang' => [
                'en' => 'Kina',
                'uk' => 'Кіна',
                'ru' => 'Кина',
            ],
        ],
        [
            'country' => 'Paraguay',
            'currency_name' => 'Guarani',
            'currency_code' => 'PYG',
            'currency_symbol' => 'Gs',
            'currency_name_lang' => [
                'en' => 'Guarani',
                'uk' => 'Гуарані',
                'ru' => 'Гуарани',
            ],
        ],
        [
            'country' => 'Peru',
            'currency_name' => 'Sol',
            'currency_code' => 'PEN',
            'currency_symbol' => 'S/',
            'currency_name_lang' => [
                'en' => 'Sol',
                'uk' => 'Сол',
                'ru' => 'Сол',
            ],
        ],
        [
            'country' => 'Philippines',
            'currency_name' => 'Philippine Peso',
            'currency_code' => 'PHP',
            'currency_symbol' => '₱',
            'currency_name_lang' => [
                'en' => 'Philippine Peso',
                'uk' => 'філіппінський песо',
                'ru' => 'Филиппинское песо',
            ],
        ],
        [
            'country' => 'Poland',
            'currency_name' => 'Zloty',
            'currency_code' => 'PLN',
            'currency_symbol' => 'zł',
            'currency_name_lang' => [
                'en' => 'Zloty',
                'uk' => 'Злотий',
                'ru' => 'злотый',
            ],
        ],
        [
            'country' => 'Portugal',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Qatar',
            'currency_name' => 'Qatari Rial',
            'currency_code' => 'QAR',
            'currency_symbol' => 'ر.ق',
            'currency_name_lang' => [
                'en' => 'Qatari Rial',
                'uk' => 'Катарський ріал',
                'ru' => 'Катарский риал',
            ],
        ],
        [
            'country' => 'Romania',
            'currency_name' => 'Romanian Leu',
            'currency_code' => 'RON',
            'currency_symbol' => 'lei',
            'currency_name_lang' => [
                'en' => 'Romanian Leu',
                'uk' => 'Румунський лей',
                'ru' => 'Румынский лей',
            ],
        ],
        [
            'country' => 'Russian Federation',
            'currency_name' => 'Russian Ruble',
            'currency_code' => 'RUB',
            'currency_symbol' => '₽',
            'currency_name_lang' => [
                'en' => 'Russian Ruble',
                'uk' => 'Російський рубль',
                'ru' => 'Русский рубль',
            ],
        ],
        [
            'country' => 'Rwanda',
            'currency_name' => 'Rwanda Franc',
            'currency_code' => 'RWF',
            'currency_symbol' => 'FRw',
            'currency_name_lang' => [
                'en' => 'Rwanda Franc',
                'uk' => 'Руандійський франк',
                'ru' => 'Руандийский франк',
            ],
        ],
        [
            'country' => 'Saint Kitts and Nevis',
            'currency_name' => 'East Caribbean Dollar',
            'currency_code' => 'XCD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'East Caribbean Dollar',
                'uk' => 'Східно-карибський долар',
                'ru' => 'Восточнокарибский доллар',
            ],
        ],
        [
            'country' => 'Saint Lucia',
            'currency_name' => 'East Caribbean Dollar',
            'currency_code' => 'XCD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'East Caribbean Dollar',
                'uk' => 'Східно-карибський долар',
                'ru' => 'Восточнокарибский доллар',
            ],
        ],
        [
            'country' => 'Saint Vincent and the Grenadines',
            'currency_name' => 'East Caribbean Dollar',
            'currency_code' => 'XCD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'East Caribbean Dollar',
                'uk' => 'Східно-карибський долар',
                'ru' => 'Восточнокарибский доллар',
            ],
        ],
        [
            'country' => 'Samoa',
            'currency_name' => 'Tala',
            'currency_code' => 'WST',
            'currency_symbol' => 'WS$',
            'currency_name_lang' => [
                'en' => 'Tala',
                'uk' => 'Тала',
                'ru' => 'Тала',
            ],
        ],
        [
            'country' => 'San Marino',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Sao Tome and Principe',
            'currency_name' => 'Dobra',
            'currency_code' => 'STN',
            'currency_symbol' => 'Db',
            'currency_name_lang' => [
                'en' => 'Dobra',
                'uk' => 'Добра',
                'ru' => 'Добра',
            ],
        ],
        [
            'country' => 'Saudi Arabia',
            'currency_name' => 'Saudi Riyal',
            'currency_code' => 'SAR',
            'currency_symbol' => 'ر.س',
            'currency_name_lang' => [
                'en' => 'Saudi Riyal',
                'uk' => 'Саудівський ріал',
                'ru' => 'Саудовский риал',
            ],
        ],
        [
            'country' => 'Senegal',
            'currency_name' => 'CFA Franc BCEAO',
            'currency_code' => 'XOF',
            'currency_symbol' => 'Fr',
            'currency_name_lang' => [
                'en' => 'CFA Franc BCEAO',
                'uk' => 'Франк CFA BCEAO',
                'ru' => 'Франк КФА BCEAO',
            ],
        ],
        [
            'country' => 'Serbia',
            'currency_name' => 'Serbian Dinar',
            'currency_code' => 'RSD',
            'currency_symbol' => 'дин.',
            'currency_name_lang' => [
                'en' => 'Serbian Dinar',
                'uk' => 'Сербський динар',
                'ru' => 'Сербский динар',
            ],
        ],
        [
            'country' => 'Seychelles',
            'currency_name' => 'Seychelles Rupee',
            'currency_code' => 'SCR',
            'currency_symbol' => '₨',
            'currency_name_lang' => [
                'en' => 'Seychelles Rupee',
                'uk' => 'Сейшельська рупія',
                'ru' => 'Сейшельская рупия',
            ],
        ],
        [
            'country' => 'Sierra Leone',
            'currency_name' => 'Leone',
            'currency_code' => 'SLL',
            'currency_symbol' => 'Le',
            'currency_name_lang' => [
                'en' => 'Leone',
                'uk' => 'Леоне',
                'ru' => 'Леоне',
            ],
        ],
        [
            'country' => 'Singapore',
            'currency_name' => 'Singapore Dollar',
            'currency_code' => 'SGD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Singapore Dollar',
                'uk' => 'Сінгапурський долар',
                'ru' => 'Сингапурский доллар',
            ],
        ],
        [
            'country' => 'Slovakia',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Slovenia',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Solomon Islands',
            'currency_name' => 'Solomon Islands Dollar',
            'currency_code' => 'SBD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Solomon Islands Dollar',
                'uk' => 'Долар Соломонових Островів',
                'ru' => 'Доллар Соломоновых Островов',
            ],
        ],
        [
            'country' => 'Somalia',
            'currency_name' => 'Somali Shilling',
            'currency_code' => 'SOS',
            'currency_symbol' => 'S',
            'currency_name_lang' => [
                'en' => 'Somali Shilling',
                'uk' => 'Сомалійський шилінг',
                'ru' => 'Сомалийский шиллинг',
            ],
        ],
        [
            'country' => 'South Africa',
            'currency_name' => 'Rand',
            'currency_code' => 'ZAR',
            'currency_symbol' => 'R',
            'currency_name_lang' => [
                'en' => 'Rand',
                'uk' => 'Ренд',
                'ru' => 'Рэнд',
            ],
        ],
        [
            'country' => 'South Sudan',
            'currency_name' => 'South Sudanese Pound',
            'currency_code' => 'SSP',
            'currency_symbol' => '£',
            'currency_name_lang' => [
                'en' => 'South Sudanese Pound',
                'uk' => 'Південносуданський фунт',
                'ru' => 'Южносуданский фунт',
            ],
        ],
        [
            'country' => 'Spain',
            'currency_name' => 'Euro',
            'currency_code' => 'EUR',
            'currency_symbol' => '€',
            'currency_name_lang' => [
                'en' => 'Euro',
                'uk' => 'Євро',
                'ru' => 'Евро',
            ],
        ],
        [
            'country' => 'Sri Lanka',
            'currency_name' => 'Sri Lanka Rupee',
            'currency_code' => 'LKR',
            'currency_symbol' => '₨',
            'currency_name_lang' => [
                'en' => 'Sri Lanka Rupee',
                'uk' => 'Рупії Шрі-Ланки',
                'ru' => 'Шри-Ланкийские рупии',
            ],
        ],
        [
            'country' => 'Sudan',
            'currency_name' => 'Sudanese Pound',
            'currency_code' => 'SDG',
            'currency_symbol' => '£',
            'currency_name_lang' => [
                'en' => 'Sudanese Pound',
                'uk' => 'Суданський фунт',
                'ru' => 'Суданский фунт',
            ],
        ],
        [
            'country' => 'Suriname',
            'currency_name' => 'Surinam Dollar',
            'currency_code' => 'SRD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Surinam Dollar',
                'uk' => 'Суринамський долар',
                'ru' => 'Суринамский доллар',
            ],
        ],
        [
            'country' => 'Sweden',
            'currency_name' => 'Swedish Krona',
            'currency_code' => 'SEK',
            'currency_symbol' => 'kr',
            'currency_name_lang' => [
                'en' => 'Swedish Krona',
                'uk' => 'Шведська крона',
                'ru' => 'Шведская крона',
            ],
        ],
        [
            'country' => 'Switzerland',
            'currency_name' => 'Swiss Franc',
            'currency_code' => 'CHF',
            'currency_symbol' => 'CHF',
            'currency_name_lang' => [
                'en' => 'Swiss Franc',
                'uk' => 'Швейцарський франк',
                'ru' => 'Швейцарский франк',
            ],
        ],
        [
            'country' => 'Syrian Arab Republic',
            'currency_name' => 'Syrian Pound',
            'currency_code' => 'SYP',
            'currency_symbol' => '£',
            'currency_name_lang' => [
                'en' => 'Syrian Pound',
                'uk' => 'Сирійський фунт',
                'ru' => 'Сирийский фунт',
            ],
        ],
        [
            'country' => 'Taiwan',
            'currency_name' => 'New Taiwan Dollar',
            'currency_code' => 'TWD',
            'currency_symbol' => 'NT$',
            'currency_name_lang' => [
                'en' => 'New Taiwan Dollar',
                'uk' => 'Новий тайванський долар',
                'ru' => 'Новый тайваньский доллар',
            ],
        ],
        [
            'country' => 'Tajikistan',
            'currency_name' => 'Somoni',
            'currency_code' => 'TJS',
            'currency_symbol' => 'ЅМ',
            'currency_name_lang' => [
                'en' => 'Somoni',
                'uk' => 'Сомоні',
                'ru' => 'Сомони',
            ],
        ],
        [
            'country' => 'Tanzania, United Republic of',
            'currency_name' => 'Tanzanian Shilling',
            'currency_code' => 'TZS',
            'currency_symbol' => 'TSh',
            'currency_name_lang' => [
                'en' => 'Tanzanian Shilling',
                'uk' => 'Танзанійський шилінг',
                'ru' => 'Танзанийский шиллинг',
            ],
        ],
        [
            'country' => 'Thailand',
            'currency_name' => 'Baht',
            'currency_code' => 'THB',
            'currency_symbol' => '฿',
            'currency_name_lang' => [
                'en' => 'Baht',
                'uk' => 'Бат',
                'ru' => 'Бат',
            ],
        ],
        [
            'country' => 'Timor-Leste',
            'currency_name' => 'US Dollar',
            'currency_code' => 'USD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'US Dollar',
                'uk' => 'Американський долар',
                'ru' => 'Доллар США',
            ],
        ],
        [
            'country' => 'Togo',
            'currency_name' => 'CFA Franc BCEAO',
            'currency_code' => 'XOF',
            'currency_symbol' => 'Fr',
            'currency_name_lang' => [
                'en' => 'CFA Franc BCEAO',
                'uk' => 'Франк CFA BCEAO',
                'ru' => 'Франк КФА BCEAO',
            ],
        ],
        [
            'country' => 'Tonga',
            'currency_name' => 'Pa’anga',
            'currency_code' => 'TOP',
            'currency_symbol' => 'T$',
            'currency_name_lang' => [
                'en' => 'Pa’anga',
                'uk' => 'Па’анга',
                'ru' => 'Па’анга',
            ],
        ],
        [
            'country' => 'Trinidad and Tobago',
            'currency_name' => 'Trinidad and Tobago Dollar',
            'currency_code' => 'TTD',
            'currency_symbol' => 'TT$',
            'currency_name_lang' => [
                'en' => 'Trinidad and Tobago Dollar',
                'uk' => 'Долар Тринідаду і Тобаго',
                'ru' => 'Доллар Тринидада и Тобаго',
            ],
        ],
        [
            'country' => 'Tunisia',
            'currency_name' => 'Tunisian Dinar',
            'currency_code' => 'TND',
            'currency_symbol' => 'د.ت',
            'currency_name_lang' => [
                'en' => 'Tunisian Dinar',
                'uk' => 'Туніський динар',
                'ru' => 'Тунисский динар',
            ],
        ],
        [
            'country' => 'Turkey',
            'currency_name' => 'Turkish Lira',
            'currency_code' => 'TRY',
            'currency_symbol' => '₺',
            'currency_name_lang' => [
                'en' => 'Turkish Lira',
                'uk' => 'Турецька ліра',
                'ru' => 'Турецкая лира',
            ],
        ],
        [
            'country' => 'Turkmenistan',
            'currency_name' => 'Turkmenistan New Manat',
            'currency_code' => 'TMT',
            'currency_symbol' => 'm',
            'currency_name_lang' => [
                'en' => 'Turkmenistan New Manat',
                'uk' => 'Туркменський новий манат',
                'ru' => 'Туркменистан Новый манат',
            ],
        ],
        [
            'country' => 'Tuvalu',
            'currency_name' => 'Australian Dollar',
            'currency_code' => 'AUD',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Australian Dollar',
                'uk' => 'Австралійський долар',
                'ru' => 'Австралийский доллар',
            ],
        ],
        [
            'country' => 'Uganda',
            'currency_name' => 'Uganda Shilling',
            'currency_code' => 'UGX',
            'currency_symbol' => 'USh',
            'currency_name_lang' => [
                'en' => 'Uganda Shilling',
                'uk' => 'Угандійський шилінг',
                'ru' => 'Угандийский шиллинг',
            ],
        ],
        [
            'country' => 'Ukraine',
            'currency_name' => 'Hryvnia',
            'currency_code' => 'UAH',
            'currency_symbol' => '₴',
            'currency_name_lang' => [
                'en' => 'Hryvnia',
                'uk' => 'Гривня',
                'ru' => 'Гривна',
            ],
        ],
        [
            'country' => 'United Arab Emirates',
            'currency_name' => 'UAE Dirham',
            'currency_code' => 'AED',
            'currency_symbol' => 'د.إ',
            'currency_name_lang' => [
                'en' => 'UAE Dirham',
                'uk' => 'Дирхам ОАЕ',
                'ru' => 'Дирхам ОАЭ',
            ],
        ],
        [
            'country' => 'United Kingdom',
            'currency_name' => 'Pound Sterling',
            'currency_code' => 'GBP',
            'currency_symbol' => '£',
            'currency_name_lang' => [
                'en' => 'Pound Sterling',
                'uk' => 'Фунт стерлінга',
                'ru' => 'Фунт стерлингов',
            ],
        ],
        [
            'country' => 'Uruguay',
            'currency_name' => 'Uruguay Peso en Unidades Indexadas (UI)',
            'currency_code' => 'UYI',
            'currency_symbol' => '$U',
            'currency_name_lang' => [
                'en' => 'Uruguay Peso en Unidades Indexadas (UI)',
                'uk' => 'Уругвайський песо в індексованих одиницях (UI)',
                'ru' => 'Уругвайское песо в индексированных единицах (UI)',
            ],
        ],
        [
            'country' => 'Uruguay',
            'currency_name' => 'Peso Uruguayo',
            'currency_code' => 'UYU',
            'currency_symbol' => '$',
            'currency_name_lang' => [
                'en' => 'Peso Uruguayo',
                'uk' => 'Уругвайський песо',
                'ru' => 'Уругвайское песо',
            ],
        ],
        [
            'country' => 'Uzbekistan',
            'currency_name' => 'Uzbekistan Sum',
            'currency_code' => 'UZS',
            'currency_symbol' => 'сўм',
            'currency_name_lang' => [
                'en' => 'Uzbekistan Sum',
                'uk' => 'Узбекистан Сум',
                'ru' => 'Узбекская сумма',
            ],
        ],
        [
            'country' => 'Vanuatu',
            'currency_name' => 'Vatu',
            'currency_code' => 'VUV',
            'currency_symbol' => 'VT',
            'currency_name_lang' => [
                'en' => 'Vatu',
                'uk' => 'Вату',
                'ru' => 'Вату',
            ],
        ],
        [
            'country' => 'Venezuela (Bolivarian Republic of)',
            'currency_name' => 'Bolivar',
            'currency_code' => 'VES',
            'currency_symbol' => 'Bs.',
            'currency_name_lang' => [
                'en' => 'Bolivar',
                'uk' => 'Болівар',
                'ru' => 'Боливар',
            ],
        ],
        [
            'country' => 'Viet Nam',
            'currency_name' => 'Dong',
            'currency_code' => 'VND',
            'currency_symbol' => '₫',
            'currency_name_lang' => [
                'en' => 'Dong',
                'uk' => 'Донг',
                'ru' => 'Донг',
            ],
        ],
        [
            'country' => 'Yemen',
            'currency_name' => 'Yemeni Rial',
            'currency_code' => 'YER',
            'currency_symbol' => '﷼',
            'currency_name_lang' => [
                'en' => 'Yemeni Rial',
                'uk' => 'Єменський ріал',
                'ru' => 'Йеменский риал',
            ],
        ],
        [
            'country' => 'Zambia',
            'currency_name' => 'Zambian Kwacha',
            'currency_code' => 'ZMW',
            'currency_symbol' => 'ZK',
            'currency_name_lang' => [
                'en' => 'Zambian Kwacha',
                'uk' => 'замбійська квача',
                'ru' => 'Замбийская квача',
            ],
        ],
        [
            'country' => 'Zimbabwe',
            'currency_name' => 'Zimbabwe Dollar',
            'currency_code' => 'ZWL',
            'currency_symbol' => 'Z$',
            'currency_name_lang' => [
                'en' => 'Zimbabwe Dollar',
                'uk' => 'Долар Зімбабве',
                'ru' => 'Зимбабвийский доллар',
            ],
        ],
    ];

    /**
     * @var array
     */
    protected array $countries = [
        [
            'country' => 'United States of America',
            'iso_code' => 'US',
            'phone_code' => '+1',
            'country_lang' => [
                'en' => 'United States of America',
                'uk' => 'Сполучені Штати Америки',
                'ru' => 'Соединенные Штаты Америки',
            ],
        ],
        [
            'country' => 'Andorra',
            'iso_code' => 'AD',
            'phone_code' => '+376',
            'country_lang' => [
                'en' => 'Andorra',
                'uk' => 'Андорра',
                'ru' => 'Андорра',
            ],
        ],
        [
            'country' => 'Afghanistan',
            'iso_code' => 'AF',
            'phone_code' => '+93',
            'country_lang' => [
                'en' => 'Afghanistan',
                'uk' => 'Афганістан',
                'ru' => 'Афганистан',
            ],
        ],
        [
            'country' => 'Albania',
            'iso_code' => 'AL',
            'phone_code' => '+355',
            'country_lang' => [
                'en' => 'Albania',
                'uk' => 'Албанія',
                'ru' => 'Албания',
            ],
        ],
        [
            'country' => 'Algeria',
            'iso_code' => 'DZ',
            'phone_code' => '+213',
            'country_lang' => [
                'en' => 'Algeria',
                'uk' => 'Алжир',
                'ru' => 'Алжир',
            ],
        ],
        [
            'country' => 'Angola',
            'iso_code' => 'AO',
            'phone_code' => '+244',
            'country_lang' => [
                'en' => 'Angola',
                'uk' => 'Ангола',
                'ru' => 'Ангола',
            ],
        ],
        [
            'country' => 'Antigua and Barbuda',
            'iso_code' => 'AG',
            'phone_code' => '+1-268',
            'country_lang' => [
                'en' => 'Antigua and Barbuda',
                'uk' => 'Антигуа і Барбуда',
                'ru' => 'Антигуа и Барбуда',
            ],
        ],
        [
            'country' => 'Argentina',
            'iso_code' => 'AR',
            'phone_code' => '+54',
            'country_lang' => [
                'en' => 'Argentina',
                'uk' => 'Аргентина',
                'ru' => 'Аргентина',
            ],
        ],
        [
            'country' => 'Armenia',
            'iso_code' => 'AM',
            'phone_code' => '+374',
            'country_lang' => [
                'en' => 'Armenia',
                'uk' => 'Вірменія',
                'ru' => 'Армения',
            ],
        ],
        [
            'country' => 'Australia',
            'iso_code' => 'AU',
            'phone_code' => '+61',
            'country_lang' => [
                'en' => 'Australia',
                'uk' => 'Австралія',
                'ru' => 'Австралия',
            ],
        ],
        [
            'country' => 'Austria',
            'iso_code' => 'AT',
            'phone_code' => '+43',
            'country_lang' => [
                'en' => 'Austria',
                'uk' => 'Австрія',
                'ru' => 'Австрия',
            ],
        ],
        [
            'country' => 'Azerbaijan',
            'iso_code' => 'AZ',
            'phone_code' => '+994',
            'country_lang' => [
                'en' => 'Azerbaijan',
                'uk' => 'Азербайджан',
                'ru' => 'Азербайджан',
            ],
        ],
        [
            'country' => 'Bahamas',
            'iso_code' => 'BS',
            'phone_code' => '+1-242',
            'country_lang' => [
                'en' => 'Bahamas',
                'uk' => 'Багамські острови',
                'ru' => 'Багамы',
            ],
        ],
        [
            'country' => 'Bahrain',
            'iso_code' => 'BH',
            'phone_code' => '+973',
            'country_lang' => [
                'en' => 'Bahrain',
                'uk' => 'Бахрейн',
                'ru' => 'Бахрейн',
            ],
        ],
        [
            'country' => 'Bangladesh',
            'iso_code' => 'BD',
            'phone_code' => '+880',
            'country_lang' => [
                'en' => 'Bangladesh',
                'uk' => 'Бангладеш',
                'ru' => 'Бангладеш',
            ],
        ],
        [
            'country' => 'Barbados',
            'iso_code' => 'BB',
            'phone_code' => '+1-246',
            'country_lang' => [
                'en' => 'Barbados',
                'uk' => 'Барбадос',
                'ru' => 'Барбадос',
            ],
        ],
        [
            'country' => 'Belarus',
            'iso_code' => 'BY',
            'phone_code' => '+375',
            'country_lang' => [
                'en' => 'Belarus',
                'uk' => 'Білорусь',
                'ru' => 'Беларусь',
            ],
        ],
        [
            'country' => 'Belgium',
            'iso_code' => 'BE',
            'phone_code' => '+32',
            'country_lang' => [
                'en' => 'Belgium',
                'uk' => 'Бельгія',
                'ru' => 'Бельгия',
            ],
        ],
        [
            'country' => 'Belize',
            'iso_code' => 'BZ',
            'phone_code' => '+501',
            'country_lang' => [
                'en' => 'Belize',
                'uk' => 'Беліз',
                'ru' => 'Белиз',
            ],
        ],
        [
            'country' => 'Benin',
            'iso_code' => 'BJ',
            'phone_code' => '+229',
            'country_lang' => [
                'en' => 'Benin',
                'uk' => 'Бенін',
                'ru' => 'Бенин',
            ],
        ],
        [
            'country' => 'Bhutan',
            'iso_code' => 'BT',
            'phone_code' => '+975',
            'country_lang' => [
                'en' => 'Bhutan',
                'uk' => 'Бутан',
                'ru' => 'Бутан',
            ],
        ],
        [
            'country' => 'Bolivia',
            'iso_code' => 'BO',
            'phone_code' => '+591',
            'country_lang' => [
                'en' => 'Bolivia',
                'uk' => 'Болівія',
                'ru' => 'Боливия',
            ],
        ],
        [
            'country' => 'Bosnia and Herzegovina',
            'iso_code' => 'BA',
            'phone_code' => '+387',
            'country_lang' => [
                'en' => 'Bosnia and Herzegovina',
                'uk' => 'Боснія і Герцеговина',
                'ru' => 'Босния и Герцеговина',
            ],
        ],
        [
            'country' => 'Botswana',
            'iso_code' => 'BW',
            'phone_code' => '+267',
            'country_lang' => [
                'en' => 'Botswana',
                'uk' => 'Ботсвана',
                'ru' => 'Ботсвана',
            ],
        ],
        [
            'country' => 'Brazil',
            'iso_code' => 'BR',
            'phone_code' => '+55',
            'country_lang' => [
                'en' => 'Brazil',
                'uk' => 'Бразилія',
                'ru' => 'Бразилия',
            ],
        ],
        [
            'country' => 'Brunei Darussalam',
            'iso_code' => 'BN',
            'phone_code' => '+673',
            'country_lang' => [
                'en' => 'Brunei Darussalam',
                'uk' => 'Бруней Даруссалам',
                'ru' => 'Бруней-Даруссалам',
            ],
        ],
        [
            'country' => 'Bulgaria',
            'iso_code' => 'BG',
            'phone_code' => '+359',
            'country_lang' => [
                'en' => 'Bulgaria',
                'uk' => 'Болгарія',
                'ru' => 'Болгария',
            ],
        ],
        [
            'country' => 'Burkina Faso',
            'iso_code' => 'BF',
            'phone_code' => '+226',
            'country_lang' => [
                'en' => 'Burkina Faso',
                'uk' => 'Буркіна Фасо',
                'ru' => 'Буркина-Фасо',
            ],
        ],
        [
            'country' => 'Burundi',
            'iso_code' => 'BI',
            'phone_code' => '+257',
            'country_lang' => [
                'en' => 'Burundi',
                'uk' => 'Бурунді',
                'ru' => 'Бурунди',
            ],
        ],
        [
            'country' => 'Cabo Verde',
            'iso_code' => 'CV',
            'phone_code' => '+238',
            'country_lang' => [
                'en' => 'Cabo Verde',
                'uk' => 'Кабо-Верде',
                'ru' => 'Кабо-Верде',
            ],
        ],
        [
            'country' => 'Cambodia',
            'iso_code' => 'KH',
            'phone_code' => '+855',
            'country_lang' => [
                'en' => 'Cambodia',
                'uk' => 'Камбоджа',
                'ru' => 'Камбоджа',
            ],
        ],
        [
            'country' => 'Cameroon',
            'iso_code' => 'CM',
            'phone_code' => '+237',
            'country_lang' => [
                'en' => 'Cameroon',
                'uk' => 'Камерун',
                'ru' => 'Камерун',
            ],
        ],
        [
            'country' => 'Canada',
            'iso_code' => 'CA',
            'phone_code' => '+1',
            'country_lang' => [
                'en' => 'Canada',
                'uk' => 'Канада',
                'ru' => 'Канада',
            ],
        ],
        [
            'country' => 'Central African Republic',
            'iso_code' => 'CF',
            'phone_code' => '+236',
            'country_lang' => [
                'en' => 'Central African Republic',
                'uk' => 'Центральноафриканська Республіка',
                'ru' => 'Центрально-Африканская Республика',
            ],
        ],
        [
            'country' => 'Chad',
            'iso_code' => 'TD',
            'phone_code' => '+235',
            'country_lang' => [
                'en' => 'Chad',
                'uk' => 'Чад',
                'ru' => 'Чад',
            ],
        ],
        [
            'country' => 'Chile',
            'iso_code' => 'CL',
            'phone_code' => '+56',
            'country_lang' => [
                'en' => 'Chile',
                'uk' => 'Чилі',
                'ru' => 'Чили',
            ],
        ],
        [
            'country' => 'China',
            'iso_code' => 'CN',
            'phone_code' => '+86',
            'country_lang' => [
                'en' => 'China',
                'uk' => 'Китай',
                'ru' => 'Китай',
            ],
        ],
        [
            'country' => 'Colombia',
            'iso_code' => 'CO',
            'phone_code' => '+57',
            'country_lang' => [
                'en' => 'Colombia',
                'uk' => 'Колумбія',
                'ru' => 'Колумбия',
            ],
        ],
        [
            'country' => 'Comoros',
            'iso_code' => 'KM',
            'phone_code' => '+269',
            'country_lang' => [
                'en' => 'Comoros',
                'uk' => 'Коморські острови',
                'ru' => 'Коморские острова',
            ],
        ],
        [
            'country' => 'Congo',
            'iso_code' => 'CG',
            'phone_code' => '+242',
            'country_lang' => [
                'en' => 'Congo',
                'uk' => 'Конго',
                'ru' => 'Конго',
            ],
        ],
        [
            'country' => 'Costa Rica',
            'iso_code' => 'CR',
            'phone_code' => '+506',
            'country_lang' => [
                'en' => 'Costa Rica',
                'uk' => 'Коста-Ріка',
                'ru' => 'Коста-Рика',
            ],
        ],
        [
            'country' => 'Croatia',
            'iso_code' => 'HR',
            'phone_code' => '+385',
            'country_lang' => [
                'en' => 'Croatia',
                'uk' => 'Хорватія',
                'ru' => 'Хорватия',
            ],
        ],
        [
            'country' => 'Cuba',
            'iso_code' => 'CU',
            'phone_code' => '+53',
            'country_lang' => [
                'en' => 'Cuba',
                'uk' => 'Куба',
                'ru' => 'Куба',
            ],
        ],
        [
            'country' => 'Cyprus',
            'iso_code' => 'CY',
            'phone_code' => '+357',
            'country_lang' => [
                'en' => 'Cyprus',
                'uk' => 'Кіпр',
                'ru' => 'Кипр',
            ],
        ],
        [
            'country' => 'Czechia',
            'iso_code' => 'CZ',
            'phone_code' => '+420',
            'country_lang' => [
                'en' => 'Czechia',
                'uk' => 'Чехія',
                'ru' => 'Чехия',
            ],
        ],
        [
            'country' => 'Denmark',
            'iso_code' => 'DK',
            'phone_code' => '+45',
            'country_lang' => [
                'en' => 'Denmark',
                'uk' => 'Данія',
                'ru' => 'Дания',
            ],
        ],
        [
            'country' => 'Djibouti',
            'iso_code' => 'DJ',
            'phone_code' => '+253',
            'country_lang' => [
                'en' => 'Djibouti',
                'uk' => 'Джібуті',
                'ru' => 'Джибути',
            ],
        ],
        [
            'country' => 'Dominica',
            'iso_code' => 'DM',
            'phone_code' => '+1-767',
            'country_lang' => [
                'en' => 'Dominica',
                'uk' => 'Домініка',
                'ru' => 'Доминика',
            ],
        ],
        [
            'country' => 'Dominican Republic',
            'iso_code' => 'DO',
            'phone_code' => '+1-809',
            'country_lang' => [
                'en' => 'Dominican Republic',
                'uk' => 'Домініканська республіка',
                'ru' => 'Доминиканская Республика',
            ],
        ],
        [
            'country' => 'Ecuador',
            'iso_code' => 'EC',
            'phone_code' => '+593',
            'country_lang' => [
                'en' => 'Ecuador',
                'uk' => 'Еквадор',
                'ru' => 'Эквадор',
            ],
        ],
        [
            'country' => 'Egypt',
            'iso_code' => 'EG',
            'phone_code' => '+20',
            'country_lang' => [
                'en' => 'Egypt',
                'uk' => 'Єгипет',
                'ru' => 'Египет',
            ],
        ],
        [
            'country' => 'El Salvador',
            'iso_code' => 'SV',
            'phone_code' => '+503',
            'country_lang' => [
                'en' => 'El Salvador',
                'uk' => 'Спаситель',
                'ru' => 'Спаситель',
            ],
        ],
        [
            'country' => 'Equatorial Guinea',
            'iso_code' => 'GQ',
            'phone_code' => '+240',
            'country_lang' => [
                'en' => 'Equatorial Guinea',
                'uk' => 'Екваторіальна Гвінея',
                'ru' => 'Экваториальная Гвинея',
            ],
        ],
        [
            'country' => 'Eritrea',
            'iso_code' => 'ER',
            'phone_code' => '+291',
            'country_lang' => [
                'en' => 'Eritrea',
                'uk' => 'Еритрея',
                'ru' => 'Эритрея',
            ],
        ],
        [
            'country' => 'Estonia',
            'iso_code' => 'EE',
            'phone_code' => '+372',
            'country_lang' => [
                'en' => 'Estonia',
                'uk' => 'Естонія',
                'ru' => 'Эстония',
            ],
        ],
        [
            'country' => 'Eswatini',
            'iso_code' => 'SZ',
            'phone_code' => '+268',
            'country_lang' => [
                'en' => 'Eswatini',
                'uk' => 'У Сваті',
                'ru' => 'В Свате',
            ],
        ],
        [
            'country' => 'Ethiopia',
            'iso_code' => 'ET',
            'phone_code' => '+251',
            'country_lang' => [
                'en' => 'Ethiopia',
                'uk' => 'Ефіопія',
                'ru' => 'Эфиопия',
            ],
        ],
        [
            'country' => 'Fiji',
            'iso_code' => 'FJ',
            'phone_code' => '+679',
            'country_lang' => [
                'en' => 'Fiji',
                'uk' => 'Фіджі',
                'ru' => 'Фиджи',
            ],
        ],
        [
            'country' => 'Finland',
            'iso_code' => 'FI',
            'phone_code' => '+358',
            'country_lang' => [
                'en' => 'Finland',
                'uk' => 'Фінляндія',
                'ru' => 'Финляндия',
            ],
        ],
        [
            'country' => 'France',
            'iso_code' => 'FR',
            'phone_code' => '+33',
            'country_lang' => [
                'en' => 'France',
                'uk' => 'Франція',
                'ru' => 'Франция',
            ],
        ],
        [
            'country' => 'Gabon',
            'iso_code' => 'GA',
            'phone_code' => '+241',
            'country_lang' => [
                'en' => 'Gabon',
                'uk' => 'Габон',
                'ru' => 'Габон',
            ],
        ],
        [
            'country' => 'Gambia',
            'iso_code' => 'GM',
            'phone_code' => '+220',
            'country_lang' => [
                'en' => 'Gambia',
                'uk' => 'Гамбія',
                'ru' => 'Гамбия',
            ],
        ],
        [
            'country' => 'Georgia',
            'iso_code' => 'GE',
            'phone_code' => '+995',
            'country_lang' => [
                'en' => 'Georgia',
                'uk' => 'Грузія',
                'ru' => 'Грузия',
            ],
        ],
        [
            'country' => 'Germany',
            'iso_code' => 'DE',
            'phone_code' => '+49',
            'country_lang' => [
                'en' => 'Germany',
                'uk' => 'Німеччина',
                'ru' => 'Германия',
            ],
        ],
        [
            'country' => 'Ghana',
            'iso_code' => 'GH',
            'phone_code' => '+233',
            'country_lang' => [
                'en' => 'Ghana',
                'uk' => 'Гана',
                'ru' => 'Гана',
            ],
        ],
        [
            'country' => 'Greece',
            'iso_code' => 'GR',
            'phone_code' => '+30',
            'country_lang' => [
                'en' => 'Greece',
                'uk' => 'Греція',
                'ru' => 'Греция',
            ],
        ],
        [
            'country' => 'Grenada',
            'iso_code' => 'GD',
            'phone_code' => '+1-473',
            'country_lang' => [
                'en' => 'Grenada',
                'uk' => 'Гренада',
                'ru' => 'Гренада',
            ],
        ],
        [
            'country' => 'Guatemala',
            'iso_code' => 'GT',
            'phone_code' => '+502',
            'country_lang' => [
                'en' => 'Guatemala',
                'uk' => 'Гватемала',
                'ru' => 'Гватемала',
            ],
        ],
        [
            'country' => 'Guinea',
            'iso_code' => 'GN',
            'phone_code' => '+224',
            'country_lang' => [
                'en' => 'Guinea',
                'uk' => 'Гвінея',
                'ru' => 'Гвинея',
            ],
        ],
        [
            'country' => 'Guinea-Bissau',
            'iso_code' => 'GW',
            'phone_code' => '+245',
            'country_lang' => [
                'en' => 'Guinea-Bissau',
                'uk' => 'Гвінея-Бісау',
                'ru' => 'Гвинея-Бисау',
            ],
        ],
        [
            'country' => 'Guyana',
            'iso_code' => 'GY',
            'phone_code' => '+592',
            'country_lang' => [
                'en' => 'Guyana',
                'uk' => 'Гайана',
                'ru' => 'Гайана',
            ],
        ],
        [
            'country' => 'Haiti',
            'iso_code' => 'HT',
            'phone_code' => '+509',
            'country_lang' => [
                'en' => 'Haiti',
                'uk' => 'Гаїті',
                'ru' => 'Гаити',
            ],
        ],
        [
            'country' => 'Honduras',
            'iso_code' => 'HN',
            'phone_code' => '+504',
            'country_lang' => [
                'en' => 'Honduras',
                'uk' => 'Гондурас',
                'ru' => 'Гондурас',
            ],
        ],
        [
            'country' => 'Hungary',
            'iso_code' => 'HU',
            'phone_code' => '+36',
            'country_lang' => [
                'en' => 'Hungary',
                'uk' => 'Угорщина',
                'ru' => 'Венгрия',
            ],
        ],
        [
            'country' => 'Iceland',
            'iso_code' => 'IS',
            'phone_code' => '+354',
            'country_lang' => [
                'en' => 'Iceland',
                'uk' => 'Ісландія',
                'ru' => 'Исландия',
            ],
        ],
        [
            'country' => 'India',
            'iso_code' => 'IN',
            'phone_code' => '+91',
            'country_lang' => [
                'en' => 'India',
                'uk' => 'Індія',
                'ru' => 'Индия',
            ],
        ],
        [
            'country' => 'Indonesia',
            'iso_code' => 'ID',
            'phone_code' => '+62',
            'country_lang' => [
                'en' => 'Indonesia',
                'uk' => 'Індонезія',
                'ru' => 'Индонезия',
            ],
        ],
        [
            'country' => 'Iran',
            'iso_code' => 'IR',
            'phone_code' => '+98',
            'country_lang' => [
                'en' => 'Iran',
                'uk' => 'Іран',
                'ru' => 'Иран',
            ],
        ],
        [
            'country' => 'Iraq',
            'iso_code' => 'IQ',
            'phone_code' => '+964',
            'country_lang' => [
                'en' => 'Iraq',
                'uk' => 'Ірак',
                'ru' => 'Ирак',
            ],
        ],
        [
            'country' => 'Ireland',
            'iso_code' => 'IE',
            'phone_code' => '+353',
            'country_lang' => [
                'en' => 'Ireland',
                'uk' => 'Ірландія',
                'ru' => 'Ирландия',
            ],
        ],
        [
            'country' => 'Israel',
            'iso_code' => 'IL',
            'phone_code' => '+972',
            'country_lang' => [
                'en' => 'Israel',
                'uk' => 'Ізраїль',
                'ru' => 'Израиль',
            ],
        ],
        [
            'country' => 'Italy',
            'iso_code' => 'IT',
            'phone_code' => '+39',
            'country_lang' => [
                'en' => 'Italy',
                'uk' => 'Італія',
                'ru' => 'Италия',
            ],
        ],
        [
            'country' => 'Jamaica',
            'iso_code' => 'JM',
            'phone_code' => '+1-876',
            'country_lang' => [
                'en' => 'Jamaica',
                'uk' => 'Ямайка',
                'ru' => 'Ямайка',
            ],
        ],
        [
            'country' => 'Japan',
            'iso_code' => 'JP',
            'phone_code' => '+81',
            'country_lang' => [
                'en' => 'Japan',
                'uk' => 'Японія',
                'ru' => 'Япония',
            ],
        ],
        [
            'country' => 'Jordan',
            'iso_code' => 'JO',
            'phone_code' => '+962',
            'country_lang' => [
                'en' => 'Jordan',
                'uk' => 'Йорданія',
                'ru' => 'Иордания',
            ],
        ],
        [
            'country' => 'Kazakhstan',
            'iso_code' => 'KZ',
            'phone_code' => '+7',
            'country_lang' => [
                'en' => 'Kazakhstan',
                'uk' => 'Казахстан',
                'ru' => 'Казахстан',
            ],
        ],
        [
            'country' => 'Kenya',
            'iso_code' => 'KE',
            'phone_code' => '+254',
            'country_lang' => [
                'en' => 'Kenya',
                'uk' => 'Кенія',
                'ru' => 'Кения',
            ],
        ],
        [
            'country' => 'Kiribati',
            'iso_code' => 'KI',
            'phone_code' => '+686',
            'country_lang' => [
                'en' => 'Kiribati',
                'uk' => 'Кірібаті',
                'ru' => 'Кирибати',
            ],
        ],
        [
            'country' => 'Korea (Democratic People\'s Republic of)',
            'iso_code' => 'KP',
            'phone_code' => '+850',
            'country_lang' => [
                'en' => 'Korea (Democratic People\'s Republic of)',
                'uk' => 'Корея (Народно-Демократична Республіка)',
                'ru' => 'Корея (Народно-Демократическая Республика)',
            ],
        ],
        [
            'country' => 'Korea (Republic of)',
            'iso_code' => 'KR',
            'phone_code' => '+82',
            'country_lang' => [
                'en' => 'Korea (Republic of)',
                'uk' => 'Корея (Республіка)',
                'ru' => 'Корея, Республика)',
            ],
        ],
        [
            'country' => 'Kuwait',
            'iso_code' => 'KW',
            'phone_code' => '+965',
            'country_lang' => [
                'en' => 'Kuwait',
                'uk' => 'Кувейт',
                'ru' => 'Кувейт',
            ],
        ],
        [
            'country' => 'Kyrgyzstan',
            'iso_code' => 'KG',
            'phone_code' => '+996',
            'country_lang' => [
                'en' => 'Kyrgyzstan',
                'uk' => 'Киргизстан',
                'ru' => 'Кыргызстан',
            ],
        ],
        [
            'country' => 'Lao People\'s Democratic Republic',
            'iso_code' => 'LA',
            'phone_code' => '+856',
            'country_lang' => [
                'en' => 'Lao People\'s Democratic Republic',
                'uk' => 'Лаоська Народно-Демократична Республіка',
                'ru' => 'Лаосская Народно-Демократическая Республика',
            ],
        ],
        [
            'country' => 'Latvia',
            'iso_code' => 'LV',
            'phone_code' => '+371',
            'country_lang' => [
                'en' => 'Latvia',
                'uk' => 'Латвія',
                'ru' => 'Латвия',
            ],
        ],
        [
            'country' => 'Lebanon',
            'iso_code' => 'LB',
            'phone_code' => '+961',
            'country_lang' => [
                'en' => 'Lebanon',
                'uk' => 'Ліван',
                'ru' => 'Ливан',
            ],
        ],
        [
            'country' => 'Lesotho',
            'iso_code' => 'LS',
            'phone_code' => '+266',
            'country_lang' => [
                'en' => 'Lesotho',
                'uk' => 'Лесото',
                'ru' => 'Лесото',
            ],
        ],
        [
            'country' => 'Liberia',
            'iso_code' => 'LR',
            'phone_code' => '+231',
            'country_lang' => [
                'en' => 'Liberia',
                'uk' => 'Ліберія',
                'ru' => 'Либерия',
            ],
        ],
        [
            'country' => 'Libya',
            'iso_code' => 'LY',
            'phone_code' => '+218',
            'country_lang' => [
                'en' => 'Libya',
                'uk' => 'Лівія',
                'ru' => 'Ливия',
            ],
        ],
        [
            'country' => 'Liechtenstein',
            'iso_code' => 'LI',
            'phone_code' => '+423',
            'country_lang' => [
                'en' => 'Liechtenstein',
                'uk' => 'Ліхтенштейн',
                'ru' => 'Лихтенштейн',
            ],
        ],
        [
            'country' => 'Lithuania',
            'iso_code' => 'LT',
            'phone_code' => '+370',
            'country_lang' => [
                'en' => 'Lithuania',
                'uk' => 'Литва',
                'ru' => 'Литва',
            ],
        ],
        [
            'country' => 'Luxembourg',
            'iso_code' => 'LU',
            'phone_code' => '+352',
            'country_lang' => [
                'en' => 'Luxembourg',
                'uk' => 'Люксембург',
                'ru' => 'Люксембург',
            ],
        ],
        [
            'country' => 'Madagascar',
            'iso_code' => 'MG',
            'phone_code' => '+261',
            'country_lang' => [
                'en' => 'Madagascar',
                'uk' => 'Мадагаскар',
                'ru' => 'Мадагаскар',
            ],
        ],
        [
            'country' => 'Malawi',
            'iso_code' => 'MW',
            'phone_code' => '+265',
            'country_lang' => [
                'en' => 'Malawi',
                'uk' => 'Малаві',
                'ru' => 'Малави',
            ],
        ],
        [
            'country' => 'Malaysia',
            'iso_code' => 'MY',
            'phone_code' => '+60',
            'country_lang' => [
                'en' => 'Malaysia',
                'uk' => 'Малайзія',
                'ru' => 'Малайзия',
            ],
        ],
        [
            'country' => 'Maldives',
            'iso_code' => 'MV',
            'phone_code' => '+960',
            'country_lang' => [
                'en' => 'Maldives',
                'uk' => 'Мальдіви',
                'ru' => 'Мальдивы',
            ],
        ],
        [
            'country' => 'Mali',
            'iso_code' => 'ML',
            'phone_code' => '+223',
            'country_lang' => [
                'en' => 'Mali',
                'uk' => 'Малі',
                'ru' => 'Мали',
            ],
        ],
        [
            'country' => 'Malta',
            'iso_code' => 'MT',
            'phone_code' => '+356',
            'country_lang' => [
                'en' => 'Malta',
                'uk' => 'Мальта',
                'ru' => 'Мальта',
            ],
        ],
        [
            'country' => 'Marshall Islands',
            'iso_code' => 'MH',
            'phone_code' => '+692',
            'country_lang' => [
                'en' => 'Marshall Islands',
                'uk' => 'Маршаллові острови',
                'ru' => 'Маршалловы острова',
            ],
        ],
        [
            'country' => 'Mauritania',
            'iso_code' => 'MR',
            'phone_code' => '+222',
            'country_lang' => [
                'en' => 'Mauritania',
                'uk' => 'Мавританія',
                'ru' => 'Мавритания',
            ],
        ],
        [
            'country' => 'Mauritius',
            'iso_code' => 'MU',
            'phone_code' => '+230',
            'country_lang' => [
                'en' => 'Mauritius',
                'uk' => 'Маврикій',
                'ru' => 'Маврикий',
            ],
        ],
        [
            'country' => 'Mexico',
            'iso_code' => 'MX',
            'phone_code' => '+52',
            'country_lang' => [
                'en' => 'Mexico',
                'uk' => 'Мексика',
                'ru' => 'Мексика',
            ],
        ],
        [
            'country' => 'Micronesia (Federated States of)',
            'iso_code' => 'FM',
            'phone_code' => '+691',
            'country_lang' => [
                'en' => 'Micronesia (Federated States of)',
                'uk' => 'Мікронезія (Федеративні Штати)',
                'ru' => 'Микронезия (Федеративные Штаты)',
            ],
        ],
        [
            'country' => 'Moldova (Republic of)',
            'iso_code' => 'MD',
            'phone_code' => '+373',
            'country_lang' => [
                'en' => 'Moldova (Republic of)',
                'uk' => 'Молдова (Республіка)',
                'ru' => 'Молдова (Республика)',
            ],
        ],
        [
            'country' => 'Monaco',
            'iso_code' => 'MC',
            'phone_code' => '+377',
            'country_lang' => [
                'en' => 'Monaco',
                'uk' => 'Монако',
                'ru' => 'Монако',
            ],
        ],
        [
            'country' => 'Mongolia',
            'iso_code' => 'MN',
            'phone_code' => '+976',
            'country_lang' => [
                'en' => 'Mongolia',
                'uk' => 'Монголія',
                'ru' => 'Монголия',
            ],
        ],
        [
            'country' => 'Montenegro',
            'iso_code' => 'ME',
            'phone_code' => '+382',
            'country_lang' => [
                'en' => 'Montenegro',
                'uk' => 'Чорногорія',
                'ru' => 'Черногория',
            ],
        ],
        [
            'country' => 'Morocco',
            'iso_code' => 'MA',
            'phone_code' => '+212',
            'country_lang' => [
                'en' => 'Morocco',
                'uk' => 'Марокко',
                'ru' => 'Марокко',
            ],
        ],
        [
            'country' => 'Mozambique',
            'iso_code' => 'MZ',
            'phone_code' => '+258',
            'country_lang' => [
                'en' => 'Mozambique',
                'uk' => 'Мозамбік',
                'ru' => 'Мозамбик',
            ],
        ],
        [
            'country' => 'Myanmar',
            'iso_code' => 'MM',
            'phone_code' => '+95',
            'country_lang' => [
                'en' => 'Myanmar',
                'uk' => 'М\'янма',
                'ru' => 'Мьянма',
            ],
        ],
        [
            'country' => 'Namibia',
            'iso_code' => 'NA',
            'phone_code' => '+264',
            'country_lang' => [
                'en' => 'Namibia',
                'uk' => 'Намібія',
                'ru' => 'Намибия',
            ],
        ],
        [
            'country' => 'Nauru',
            'iso_code' => 'NR',
            'phone_code' => '+674',
            'country_lang' => [
                'en' => 'Nauru',
                'uk' => 'Науру',
                'ru' => 'Науру',
            ],
        ],
        [
            'country' => 'Nepal',
            'iso_code' => 'NP',
            'phone_code' => '+977',
            'country_lang' => [
                'en' => 'Nepal',
                'uk' => 'Непал',
                'ru' => 'Непал',
            ],
        ],
        [
            'country' => 'Netherlands',
            'iso_code' => 'NL',
            'phone_code' => '+31',
            'country_lang' => [
                'en' => 'Netherlands',
                'uk' => 'Нідерланди',
                'ru' => 'Нидерланды',
            ],
        ],
        [
            'country' => 'New Zealand',
            'iso_code' => 'NZ',
            'phone_code' => '+64',
            'country_lang' => [
                'en' => 'New Zealand',
                'uk' => 'Нова Зеландія',
                'ru' => 'Новая Зеландия',
            ],
        ],
        [
            'country' => 'Nicaragua',
            'iso_code' => 'NI',
            'phone_code' => '+505',
            'country_lang' => [
                'en' => 'Nicaragua',
                'uk' => 'Нікарагуа',
                'ru' => 'Никарагуа',
            ],
        ],
        [
            'country' => 'Niger',
            'iso_code' => 'NE',
            'phone_code' => '+227',
            'country_lang' => [
                'en' => 'Niger',
                'uk' => 'Нігер',
                'ru' => 'Нигер',
            ],
        ],
        [
            'country' => 'Nigeria',
            'iso_code' => 'NG',
            'phone_code' => '+234',
            'country_lang' => [
                'en' => 'Nigeria',
                'uk' => 'Нігерія',
                'ru' => 'Нигерия',
            ],
        ],
        [
            'country' => 'North Macedonia',
            'iso_code' => 'MK',
            'phone_code' => '+389',
            'country_lang' => [
                'en' => 'North Macedonia',
                'uk' => 'Північна Македонія',
                'ru' => 'Северная Македония',
            ],
        ],
        [
            'country' => 'Norway',
            'iso_code' => 'NO',
            'phone_code' => '+47',
            'country_lang' => [
                'en' => 'Norway',
                'uk' => 'Норвегія',
                'ru' => 'Норвегия',
            ],
        ],
        [
            'country' => 'Oman',
            'iso_code' => 'OM',
            'phone_code' => '+968',
            'country_lang' => [
                'en' => 'Oman',
                'uk' => 'Оман',
                'ru' => 'Оман',
            ],
        ],
        [
            'country' => 'Pakistan',
            'iso_code' => 'PK',
            'phone_code' => '+92',
            'country_lang' => [
                'en' => 'Pakistan',
                'uk' => 'Пакистан',
                'ru' => 'Пакистан',
            ],
        ],
        [
            'country' => 'Palau',
            'iso_code' => 'PW',
            'phone_code' => '+680',
            'country_lang' => [
                'en' => 'Palau',
                'uk' => 'Палау',
                'ru' => 'Палау',
            ],
        ],
        [
            'country' => 'Panama',
            'iso_code' => 'PA',
            'phone_code' => '+507',
            'country_lang' => [
                'en' => 'Panama',
                'uk' => 'Панама',
                'ru' => 'Панама',
            ],
        ],
        [
            'country' => 'Papua New Guinea',
            'iso_code' => 'PG',
            'phone_code' => '+675',
            'country_lang' => [
                'en' => 'Papua New Guinea',
                'uk' => 'Папуа-Нова Гвінея',
                'ru' => 'Папуа - Новая Гвинея',
            ],
        ],
        [
            'country' => 'Paraguay',
            'iso_code' => 'PY',
            'phone_code' => '+595',
            'country_lang' => [
                'en' => 'Paraguay',
                'uk' => 'Парагвай',
                'ru' => 'Парагвай',
            ],
        ],
        [
            'country' => 'Peru',
            'iso_code' => 'PE',
            'phone_code' => '+51',
            'country_lang' => [
                'en' => 'Peru',
                'uk' => 'Перу',
                'ru' => 'Перу',
            ],
        ],
        [
            'country' => 'Philippines',
            'iso_code' => 'PH',
            'phone_code' => '+63',
            'country_lang' => [
                'en' => 'Philippines',
                'uk' => 'Філіппіни',
                'ru' => 'Филиппины',
            ],
        ],
        [
            'country' => 'Poland',
            'iso_code' => 'PL',
            'phone_code' => '+48',
            'country_lang' => [
                'en' => 'Poland',
                'uk' => 'Польща',
                'ru' => 'Польша',
            ],
        ],
        [
            'country' => 'Portugal',
            'iso_code' => 'PT',
            'phone_code' => '+351',
            'country_lang' => [
                'en' => 'Portugal',
                'uk' => 'Португалія',
                'ru' => 'Португалия',
            ],
        ],
        [
            'country' => 'Qatar',
            'iso_code' => 'QA',
            'phone_code' => '+974',
            'country_lang' => [
                'en' => 'Qatar',
                'uk' => 'Катар',
                'ru' => 'Катар',
            ],
        ],
        [
            'country' => 'Romania',
            'iso_code' => 'RO',
            'phone_code' => '+40',
            'country_lang' => [
                'en' => 'Romania',
                'uk' => 'Румунія',
                'ru' => 'Румыния',
            ],
        ],
        [
            'country' => 'Russian Federation',
            'iso_code' => 'RU',
            'phone_code' => '+7',
            'country_lang' => [
                'en' => 'Russian Federation',
                'uk' => 'Російська Федерація',
                'ru' => 'Российская Федерация',
            ],
        ],
        [
            'country' => 'Rwanda',
            'iso_code' => 'RW',
            'phone_code' => '+250',
            'country_lang' => [
                'en' => 'Rwanda',
                'uk' => 'Руанда',
                'ru' => 'Руанда',
            ],
        ],
        [
            'country' => 'Saint Kitts and Nevis',
            'iso_code' => 'KN',
            'phone_code' => '+1-869',
            'country_lang' => [
                'en' => 'Saint Kitts and Nevis',
                'uk' => 'Сент-Кітс і Невіс',
                'ru' => 'Сент-Китс и Невис',
            ],
        ],
        [
            'country' => 'Saint Lucia',
            'iso_code' => 'LC',
            'phone_code' => '+1-758',
            'country_lang' => [
                'en' => 'Saint Lucia',
                'uk' => 'Сент-Люсія',
                'ru' => 'Санкт-Люсия',
            ],
        ],
        [
            'country' => 'Saint Vincent and the Grenadines',
            'iso_code' => 'VC',
            'phone_code' => '+1-784',
            'country_lang' => [
                'en' => 'Saint Vincent and the Grenadines',
                'uk' => 'Сент-Вінсент і Гренадини',
                'ru' => 'Святой Винсент и Гренадины',
            ],
        ],
        [
            'country' => 'Samoa',
            'iso_code' => 'WS',
            'phone_code' => '+685',
            'country_lang' => [
                'en' => 'Samoa',
                'uk' => 'Самоа',
                'ru' => 'Самоа',
            ],
        ],
        [
            'country' => 'San Marino',
            'iso_code' => 'SM',
            'phone_code' => '+378',
            'country_lang' => [
                'en' => 'San Marino',
                'uk' => 'Сан-Марино',
                'ru' => 'Сан-Марино',
            ],
        ],
        [
            'country' => 'Sao Tome and Principe',
            'iso_code' => 'ST',
            'phone_code' => '+239',
            'country_lang' => [
                'en' => 'Sao Tome and Principe',
                'uk' => 'Сан-Томе і Принсіпі',
                'ru' => 'Сан-Томе и Принсипи',
            ],
        ],
        [
            'country' => 'Saudi Arabia',
            'iso_code' => 'SA',
            'phone_code' => '+966',
            'country_lang' => [
                'en' => 'Saudi Arabia',
                'uk' => 'Саудівська Аравія',
                'ru' => 'Саудовская Аравия',
            ],
        ],
        [
            'country' => 'Senegal',
            'iso_code' => 'SN',
            'phone_code' => '+221',
            'country_lang' => [
                'en' => 'Senegal',
                'uk' => 'Сенегал',
                'ru' => 'Сенегал',
            ],
        ],
        [
            'country' => 'Serbia',
            'iso_code' => 'RS',
            'phone_code' => '+381',
            'country_lang' => [
                'en' => 'Serbia',
                'uk' => 'Сербія',
                'ru' => 'Сербия',
            ],
        ],
        [
            'country' => 'Seychelles',
            'iso_code' => 'SC',
            'phone_code' => '+248',
            'country_lang' => [
                'en' => 'Seychelles',
                'uk' => 'Сейшельські острови',
                'ru' => 'Сейшельские острова',
            ],
        ],
        [
            'country' => 'Sierra Leone',
            'iso_code' => 'SL',
            'phone_code' => '+232',
            'country_lang' => [
                'en' => 'Sierra Leone',
                'uk' => 'Сьєрра-Леоне',
                'ru' => 'Сьерра-Леоне',
            ],
        ],
        [
            'country' => 'Singapore',
            'iso_code' => 'SG',
            'phone_code' => '+65',
            'country_lang' => [
                'en' => 'Singapore',
                'uk' => 'Сінгапур',
                'ru' => 'Сингапур',
            ],
        ],
        [
            'country' => 'Slovakia',
            'iso_code' => 'SK',
            'phone_code' => '+421',
            'country_lang' => [
                'en' => 'Slovakia',
                'uk' => 'Словаччина',
                'ru' => 'Словакия',
            ],
        ],
        [
            'country' => 'Slovenia',
            'iso_code' => 'SI',
            'phone_code' => '+386',
            'country_lang' => [
                'en' => 'Slovenia',
                'uk' => 'Словенія',
                'ru' => 'Словения',
            ],
        ],
        [
            'country' => 'Solomon Islands',
            'iso_code' => 'SB',
            'phone_code' => '+677',
            'country_lang' => [
                'en' => 'Solomon Islands',
                'uk' => 'Соломонові острови',
                'ru' => 'Соломоновы острова',
            ],
        ],
        [
            'country' => 'Somalia',
            'iso_code' => 'SO',
            'phone_code' => '+252',
            'country_lang' => [
                'en' => 'Somalia',
                'uk' => 'Сомалі',
                'ru' => 'Сомали',
            ],
        ],
        [
            'country' => 'South Africa',
            'iso_code' => 'ZA',
            'phone_code' => '+27',
            'country_lang' => [
                'en' => 'South Africa',
                'uk' => 'Південна Африка',
                'ru' => 'Южная Африка',
            ],
        ],
        [
            'country' => 'South Sudan',
            'iso_code' => 'SS',
            'phone_code' => '+211',
            'country_lang' => [
                'en' => 'South Sudan',
                'uk' => 'Південний Судан',
                'ru' => 'южный Судан',
            ],
        ],
        [
            'country' => 'Spain',
            'iso_code' => 'ES',
            'phone_code' => '+34',
            'country_lang' => [
                'en' => 'Spain',
                'uk' => 'Іспанія',
                'ru' => 'Испания',
            ],
        ],
        [
            'country' => 'Sri Lanka',
            'iso_code' => 'LK',
            'phone_code' => '+94',
            'country_lang' => [
                'en' => 'Sri Lanka',
                'uk' => 'Шрі Ланка',
                'ru' => 'Шри-Ланка',
            ],
        ],
        [
            'country' => 'Sudan',
            'iso_code' => 'SD',
            'phone_code' => '+249',
            'country_lang' => [
                'en' => 'Sudan',
                'uk' => 'Судан',
                'ru' => 'Судан',
            ],
        ],
        [
            'country' => 'Suriname',
            'iso_code' => 'SR',
            'phone_code' => '+597',
            'country_lang' => [
                'en' => 'Suriname',
                'uk' => 'Сурінам',
                'ru' => 'Суринам',
            ],
        ],
        [
            'country' => 'Sweden',
            'iso_code' => 'SE',
            'phone_code' => '+46',
            'country_lang' => [
                'en' => 'Sweden',
                'uk' => 'Швеція',
                'ru' => 'Швеция',
            ],
        ],
        [
            'country' => 'Switzerland',
            'iso_code' => 'CH',
            'phone_code' => '+41',
            'country_lang' => [
                'en' => 'Switzerland',
                'uk' => 'Швейцарія',
                'ru' => 'Швейцария',
            ],
        ],
        [
            'country' => 'Syrian Arab Republic',
            'iso_code' => 'SY',
            'phone_code' => '+963',
            'country_lang' => [
                'en' => 'Syrian Arab Republic',
                'uk' => 'Сирійська Арабська Республіка',
                'ru' => 'Сирийская Арабская Республика',
            ],
        ],
        [
            'country' => 'Taiwan',
            'iso_code' => 'TW',
            'phone_code' => '+886',
            'country_lang' => [
                'en' => 'Taiwan',
                'uk' => 'Тайвань',
                'ru' => 'Тайвань',
            ],
        ],
        [
            'country' => 'Tajikistan',
            'iso_code' => 'TJ',
            'phone_code' => '+992',
            'country_lang' => [
                'en' => 'Tajikistan',
                'uk' => 'Таджикистан',
                'ru' => 'Таджикистан',
            ],
        ],
        [
            'country' => 'Tanzania, United Republic of',
            'iso_code' => 'TZ',
            'phone_code' => '+255',
            'country_lang' => [
                'en' => 'Tanzania, United Republic of',
                'uk' => 'Танзанія, Об\'єднана Республіка',
                'ru' => 'Танзания, Объединенная Республика',
            ],
        ],
        [
            'country' => 'Thailand',
            'iso_code' => 'TH',
            'phone_code' => '+66',
            'country_lang' => [
                'en' => 'Thailand',
                'uk' => 'Таїланд',
                'ru' => 'Таиланд',
            ],
        ],
        [
            'country' => 'Timor-Leste',
            'iso_code' => 'TL',
            'phone_code' => '+670',
            'country_lang' => [
                'en' => 'Timor-Leste',
                'uk' => 'Тимор читати',
                'ru' => 'Тимор читать',
            ],
        ],
        [
            'country' => 'Togo',
            'iso_code' => 'TG',
            'phone_code' => '+228',
            'country_lang' => [
                'en' => 'Togo',
                'uk' => 'Йти',
                'ru' => 'Идти',
            ],
        ],
        [
            'country' => 'Tonga',
            'iso_code' => 'TO',
            'phone_code' => '+676',
            'country_lang' => [
                'en' => 'Tonga',
                'uk' => 'Тонга',
                'ru' => 'Тонга',
            ],
        ],
        [
            'country' => 'Trinidad and Tobago',
            'iso_code' => 'TT',
            'phone_code' => '+1-868',
            'country_lang' => [
                'en' => 'Trinidad and Tobago',
                'uk' => 'Тринідад і Тобаго',
                'ru' => 'Тринидад и Тобаго',
            ],
        ],
        [
            'country' => 'Tunisia',
            'iso_code' => 'TN',
            'phone_code' => '+216',
            'country_lang' => [
                'en' => 'Tunisia',
                'uk' => 'Туніс',
                'ru' => 'Тунис',
            ],
        ],
        [
            'country' => 'Turkey',
            'iso_code' => 'TR',
            'phone_code' => '+90',
            'country_lang' => [
                'en' => 'Turkey',
                'uk' => 'Туреччина',
                'ru' => 'Турция',
            ],
        ],
        [
            'country' => 'Turkmenistan',
            'iso_code' => 'TM',
            'phone_code' => '+993',
            'country_lang' => [
                'en' => 'Turkmenistan',
                'uk' => 'Туркменістан',
                'ru' => 'Туркменистан',
            ],
        ],
        [
            'country' => 'Tuvalu',
            'iso_code' => 'TV',
            'phone_code' => '+688',
            'country_lang' => [
                'en' => 'Tuvalu',
                'uk' => 'Тувалу',
                'ru' => 'Тувалу',
            ],
        ],
        [
            'country' => 'Uganda',
            'iso_code' => 'UG',
            'phone_code' => '+256',
            'country_lang' => [
                'en' => 'Uganda',
                'uk' => 'Уганда',
                'ru' => 'Уганда',
            ],
        ],
        [
            'country' => 'Ukraine',
            'iso_code' => 'UA',
            'phone_code' => '+380',
            'country_lang' => [
                'en' => 'Ukraine',
                'uk' => 'Україна',
                'ru' => 'Украина',
            ],
        ],
        [
            'country' => 'United Arab Emirates',
            'iso_code' => 'AE',
            'phone_code' => '+971',
            'country_lang' => [
                'en' => 'United Arab Emirates',
                'uk' => 'Об\'єднані Арабські Емірати',
                'ru' => 'Объединенные Арабские Эмираты',
            ],
        ],
        [
            'country' => 'United Kingdom',
            'iso_code' => 'GB',
            'phone_code' => '+44',
            'country_lang' => [
                'en' => 'United Kingdom',
                'uk' => 'Об\'єднане Королівство',
                'ru' => 'Великобритания',
            ],
        ],
        [
            'country' => 'Uruguay',
            'iso_code' => 'UY',
            'phone_code' => '+598',
            'country_lang' => [
                'en' => 'Uruguay',
                'uk' => 'Уругвай',
                'ru' => 'Уругвай',
            ],
        ],
        [
            'country' => 'Uzbekistan',
            'iso_code' => 'UZ',
            'phone_code' => '+998',
            'country_lang' => [
                'en' => 'Uzbekistan',
                'uk' => 'Узбекистан',
                'ru' => 'Узбекистан',
            ],
        ],
        [
            'country' => 'Vanuatu',
            'iso_code' => 'VU',
            'phone_code' => '+678',
            'country_lang' => [
                'en' => 'Vanuatu',
                'uk' => 'Вануату',
                'ru' => 'Вануату',
            ],
        ],
        [
            'country' => 'Venezuela (Bolivarian Republic of)',
            'iso_code' => 'VE',
            'phone_code' => '+58',
            'country_lang' => [
                'en' => 'Venezuela (Bolivarian Republic of)',
                'uk' => 'Венесуела (Боліваріанська Республіка)',
                'ru' => 'Венесуэла (Боливарианская Республика)',
            ],
        ],
        [
            'country' => 'Viet Nam',
            'iso_code' => 'VN',
            'phone_code' => '+84',
            'country_lang' => [
                'en' => 'Viet Nam',
                'uk' => 'В\'єтнам',
                'ru' => 'Вьетнам',
            ],
        ],
        [
            'country' => 'Yemen',
            'iso_code' => 'YE',
            'phone_code' => '+967',
            'country_lang' => [
                'en' => 'Yemen',
                'uk' => 'Ємен',
                'ru' => 'Йемен',
            ],
        ],
        [
            'country' => 'Zambia',
            'iso_code' => 'ZM',
            'phone_code' => '+260',
            'country_lang' => [
                'en' => 'Zambia',
                'uk' => 'Замбія',
                'ru' => 'Замбия',
            ],
        ],
        [
            'country' => 'Zimbabwe',
            'iso_code' => 'ZW',
            'phone_code' => '+263',
            'country_lang' => [
                'en' => 'Zimbabwe',
                'uk' => 'Зімбабве',
                'ru' => 'Зимбабве',
            ],
        ],
    ];

    /**
     * @return void
     */
    public function run(): void
    {
        $currencies = collect($this->currencies);

        foreach ($this->countries as $countryData) {
            $currencyData = $currencies->where('country', $countryData['country'])->first();
            if ($currencyData) {
                $currency = Currency::where('code', $currencyData['currency_code'])
                    ->first();
                if (! $currency) {
                    $currency = Currency::create([
                        'name' => $currencyData['currency_name_lang'],
                        'code' => $currencyData['currency_code'],
                        'symbol' => $currencyData['currency_symbol'],
                    ]);
                }
                $country = Country::where('name', $countryData['country'])->first();
                if (! $country) {
                    Country::create([
                        'name' => $countryData['country_lang'],
                        'iso_code' => $countryData['iso_code'],
                        'phone_code' => $countryData['phone_code'],
                        'currency_id' => $currency->id,
                    ]);
                } else {
                    $country->currency_id = $currency->id;
                    $country->save();
                }
            }
        }

        Artisan::call('update:exchange-rates');
    }
}
