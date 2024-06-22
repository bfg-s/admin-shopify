<?php

namespace Admin\Extend\AdminShopify\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Admin\Extend\AdminShopify\Models\Promocode
 *
 * @property int $id
 * @property string|null $name
 * @property string $code
 * @property float $discount_percent
 * @property float $discount_price
 * @property bool $delete_after_use
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode query()
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode whereDeleteAfterUse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode whereDiscountPercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode whereDiscountPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Promocode whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Promocode extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'code',
        'discount_percent',
        'discount_price',
        'delete_after_use',
        'active',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'name' => 'string',
        'code' => 'string',
        'discount_percent' => 'float',
        'discount_price' => 'float',
        'delete_after_use' => 'boolean',
        'active' => 'boolean',
    ];
}
