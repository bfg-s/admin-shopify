<?php

namespace Admin\Extend\AdminShopify\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\Translatable\HasTranslations;

/**
 * Admin\Extend\AdminShopify\Models\ProductCategoryPropertyValue
 *
 * @property int $id
 * @property int $category_property_id
 * @property int $category_id
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Admin\Extend\AdminShopify\Models\ProductCategory|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, ProductCategoryPropertyValue> $products
 * @property-read int|null $products_count
 * @property-read \Admin\Extend\AdminShopify\Models\ProductCategoryProperty|null $property
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryPropertyValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryPropertyValue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryPropertyValue query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryPropertyValue whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryPropertyValue whereCategoryPropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryPropertyValue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryPropertyValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryPropertyValue whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryPropertyValue whereValue($value)
 * @property int $order
 * @property-read mixed $translations
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryPropertyValue whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryPropertyValue whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryPropertyValue whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryPropertyValue whereJsonContainsLocale(string $column, string $locale, ?mixed $value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryPropertyValue whereJsonContainsLocales(string $column, array $locales, ?mixed $value)
 * @mixin \Eloquent
 */
class ProductCategoryPropertyValue extends Model
{
    use HasTranslations;

    /**
     * @var string[]
     */
    protected $fillable = [
        'category_property_id',
        'category_id',
        'value',
        'order',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'category_property_id' => 'integer',
        'category_id' => 'integer',
        'value' => 'array',
        'order' => 'integer',
    ];

    /**
     * @var array
     */
    protected array $translatable = [
        'value'
    ];

    /**
     * @return HasOne
     */
    public function property(): HasOne
    {
        return $this->hasOne(ProductCategoryProperty::class, 'id', 'category_property_id');
    }

    /**
     * @return HasOne
     */
    public function category(): HasOne
    {
        return $this->hasOne(ProductCategory::class, 'id', 'category_id');
    }

    /**
     * @return BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(ProductCategoryPropertyValue::class, 'product_property_values', 'property_value_id', 'product_id');
    }
}
