<?php

namespace Admin\Extend\AdminShopify\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Admin\Extend\AdminShopify\Models\ProductImage
 *
 * @property int $id
 * @property string $photo
 * @property int $order
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductImage whereUpdatedAt($value)
 * @property-read \Admin\Extend\AdminShopify\Models\Product|null $product
 * @mixin \Eloquent
 */
class ProductImage extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'photo',
        'order',
        'product_id',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'photo' => 'string',
        'order' => 'integer',
        'product_id' => 'integer',
    ];

    /**
     * @return HasOne
     */
    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
