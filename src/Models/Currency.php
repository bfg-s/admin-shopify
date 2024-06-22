<?php

namespace Admin\Extend\AdminShopify\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\Translatable\HasTranslations;

/**
 * Admin\Extend\AdminShopify\Models\Currency
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string|null $symbol
 * @property string|null $exchange_rate
 * @property string|null $exchange_rate_adjustment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereUpdatedAt($value)
 * @property bool $active
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereActive($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\CartItem> $cartItems
 * @property-read int|null $cart_items_count
 * @property-read \Admin\Extend\AdminShopify\Models\Country|null $country
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\OrderItem> $orderItems
 * @property-read int|null $order_items_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\Order> $orders
 * @property-read int|null $orders_count
 * @property-read mixed $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereExchangeRateAdjustment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereJsonContainsLocale(string $column, string $locale, ?mixed $value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereJsonContainsLocales(string $column, array $locales, ?mixed $value)
 * @mixin \Eloquent
 */
class Currency extends Model
{
    use HasTranslations;

    /**
     * @var string[]
     */
    protected $fillable = [
        'code',
        'name',
        'symbol',
        'exchange_rate',
        'exchange_rate_adjustment',
        'active',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'code' => 'string',
        'name' => 'array',
        'symbol' => 'string',
        'exchange_rate' => 'float',
        'exchange_rate_adjustment' => 'float',
        'active' => 'boolean',
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
    public function country(): HasOne
    {
        return $this->hasOne(Country::class, 'currency_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function cartItems(): HasMany
    {
        return $this->hasMany(CartItem::class, 'currency_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'currency_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'currency_id', 'id');
    }

    /**
     * @param  string  $from
     * @param  string  $to
     * @param  float|int  $amount
     * @return float|int|null
     */
    public static function convert(
        string $from,
        string $to,
        float|int $amount
    ): float|int|null {
        $fromModelValue = static::where('code', $from)->first()?->exchange_rate ?: 0;
        $toModel = static::where('code', $to)->first();
        $toModelValueAdj = $toModel?->exchange_rate_adjustment ?: 0;
        $toModelValue = ($toModel?->exchange_rate ?: 0) + $toModelValueAdj;
        if ($fromModelValue == 0 || $toModelValue == 0) {
            return null;
        }
        $dollars = $amount / $fromModelValue;

        return $dollars * $toModelValue;
    }
}
