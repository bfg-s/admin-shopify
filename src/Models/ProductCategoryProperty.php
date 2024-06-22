<?php

namespace Admin\Extend\AdminShopify\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\Translatable\HasTranslations;

/**
 * Admin\Extend\AdminShopify\Models\ProductCategoryProperty
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\ProductCategoryPropertyValue> $propertyValues
 * @property-read int|null $property_values_count
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryProperty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryProperty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryProperty query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryProperty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryProperty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryProperty whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryProperty whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryProperty whereUpdatedAt($value)
 * @property int $category_id
 * @property-read \Admin\Extend\AdminShopify\Models\ProductCategory|null $category
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryProperty whereCategoryId($value)
 * @property int $order
 * @property-read mixed $translations
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryProperty whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryProperty whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryProperty whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryProperty whereJsonContainsLocale(string $column, string $locale, ?mixed $value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategoryProperty whereJsonContainsLocales(string $column, array $locales, ?mixed $value)
 * @mixin \Eloquent
 */
class ProductCategoryProperty extends Model
{
    use HasTranslations;

    /**
     * @var string[]
     */
    protected $fillable = [
        'category_id',
        'name',
        'type',
        'order',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'category_id' => 'int',
        'name' => 'array',
        'type' => 'string',
        'order' => 'int',
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
    public function category(): HasOne
    {
        return $this->hasOne(ProductCategory::class, 'id', 'category_id');
    }

    /**
     * @return HasMany
     */
    public function propertyValues(): HasMany
    {
        return $this->hasMany(ProductCategoryPropertyValue::class, 'category_property_id', 'id');
    }
}
