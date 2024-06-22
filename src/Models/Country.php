<?php

namespace Admin\Extend\AdminShopify\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\Translatable\HasTranslations;

/**
 * Admin\Extend\AdminShopify\Models\Country
 *
 * @property int $id
 * @property string $name
 * @property string $iso_code
 * @property string $phone_code
 * @property int $currency_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereIsoCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country wherePhoneCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 * @property bool $active
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereActive($value)
 * @property-read \Admin\Extend\AdminShopify\Models\Currency|null $currency
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\Order> $orders
 * @property-read int|null $orders_count
 * @property-read mixed $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereJsonContainsLocale(string $column, string $locale, ?mixed $value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereJsonContainsLocales(string $column, array $locales, ?mixed $value)
 * @mixin \Eloquent
 */
class Country extends Model
{
    use HasTranslations;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'iso_code',
        'phone_code',
        'currency_id',
        'active',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'name' => 'array',
        'iso_code' => 'string',
        'phone_code' => 'string',
        'currency_id' => 'int',
        'active' => 'bool',
    ];

    /**
     * @var array
     */
    protected array $translatable = [
        'name'
    ];

    /**
     * @return HasOne
     */
    public function currency(): HasOne
    {
        return $this->hasOne(Currency::class, 'id', 'currency_id');
    }

    /**
     * @return HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'country_id', 'id');
    }
}
