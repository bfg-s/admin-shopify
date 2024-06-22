<?php

namespace Admin\Extend\AdminShopify\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Admin\Extend\AdminShopify\Models\ProductPrice
 *
 * @property int $id
 * @property float $price
 * @property float $discount_percent
 * @property float $discount_price
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrice query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrice whereDiscountPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrice whereDiscountPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrice wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrice whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrice whereUpdatedAt($value)
 * @property-read \Admin\Extend\AdminShopify\Models\Product|null $product
 * @property int $availability
 * @property int $currency_id
 * @property-read \Admin\Extend\AdminShopify\Models\Currency|null $currency
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrice whereAvailability($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrice whereCurrencyId($value)
 * @property-read bool $has_discount
 * @property-read bool $discount
 * @property-read string $format_price
 * @mixin \Eloquent
 */
class ProductPrice extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'price',
        'discount_percent',
        'discount_price',
        'availability',
        'currency_id',
        'product_id',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'price' => 'float',
        'discount_percent' => 'float',
        'discount_price' => 'float',
        'availability' => 'integer',
        'currency_id' => 'integer',
        'product_id' => 'integer',
    ];

    /**
     * @var string[]
     */
    protected $with = [
        'currency'
    ];

    /**
     * @return HasOne
     */
    public function currency(): HasOne
    {
        return $this->hasOne(Currency::class, 'id', 'currency_id');
    }

    /**
     * @return HasOne
     */
    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    /**
     * @return string
     */
    public function getFormatPriceAttribute(): string
    {
        return number_format($this->price ?: 0, 2, '.', ', ');
    }

    /**
     * @return string
     */
    public function getDiscountAttribute(): string
    {
        $val = $this->discount_price;

        if ($this->discount_percent) {

            $val = $this->price - (($this->price / 100) * $this->discount_percent);
        }

        return number_format($val ?: 0, 2, '.', ', ');
    }

    /**
     * @return bool
     */
    public function getHasDiscountAttribute(): bool
    {
        return $this->discount_price > 0 || $this->discount_percent > 0;
    }
}
