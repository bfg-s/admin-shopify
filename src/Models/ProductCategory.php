<?php

namespace Admin\Extend\AdminShopify\Models;

use Admin\Extend\AdminSeo\Traits\Seoable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\Translatable\HasTranslations;

/**
 * Admin\Extend\AdminShopify\Models\ProductCategory
 *
 * @property int $id
 * @property string|null $photo
 * @property string $name
 * @property string|null $description
 * @property string|null $short_description
 * @property int|null $parent_id
 * @property int $order
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|ProductCategory newModelQuery()
 * @method static Builder|ProductCategory newQuery()
 * @method static Builder|ProductCategory query()
 * @method static Builder|ProductCategory whereActive($value)
 * @method static Builder|ProductCategory whereCreatedAt($value)
 * @method static Builder|ProductCategory whereDescription($value)
 * @method static Builder|ProductCategory whereId($value)
 * @method static Builder|ProductCategory whereName($value)
 * @method static Builder|ProductCategory whereOrder($value)
 * @method static Builder|ProductCategory whereParentId($value)
 * @method static Builder|ProductCategory wherePhoto($value)
 * @method static Builder|ProductCategory whereShortDescription($value)
 * @method static Builder|ProductCategory whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, ProductCategory> $child
 * @property-read int|null $child_count
 * @property-read ProductCategory|null $parent
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\ProductCategoryPropertyValue> $propertyValues
 * @property-read int|null $property_values_count
 * @property-read \Admin\Extend\AdminSeo\Models\Seo|null $seo
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\ProductCategoryProperty> $properties
 * @property-read int|null $properties_count
 * @property-read mixed $translations
 * @method static Builder|ProductCategory whereLocale(string $column, string $locale)
 * @method static Builder|ProductCategory whereLocales(string $column, array $locales)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\Product> $products
 * @property-read int|null $products_count
 * @method static Builder|ProductCategory active()
 * @method static Builder|ProductCategory hasPhotos()
 * @method static Builder|ProductCategory roots()
 * @method static Builder|ProductCategory whereJsonContainsLocale(string $column, string $locale, ?mixed $value)
 * @method static Builder|ProductCategory whereJsonContainsLocales(string $column, array $locales, ?mixed $value)
 * @mixin \Eloquent
 */
class ProductCategory extends Model
{
    use Seoable;
    use HasTranslations;

    /**
     * @var string[]
     */
    protected $fillable = [
        'photo',
        'name',
        'description',
        'short_description',
        'parent_id',
        'order',
        'active',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'photo' => 'string',
        'name' => 'array',
        'description' => 'array',
        'short_description' => 'array',
        'parent_id' => 'integer',
        'order' => 'integer',
        'active' => 'boolean',
    ];

    /**
     * @var array
     */
    protected array $translatable = [
        'name',
        'description',
        'short_description',
    ];

    /**
     * @return HasOne
     */
    public function parent(): HasOne
    {
        return $this->hasOne(ProductCategory::class, 'id', 'parent_id');
    }

    /**
     * @return HasMany
     */
    public function child(): HasMany
    {
        return $this->hasMany(ProductCategory::class, 'parent_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function properties(): HasMany
    {
        return $this->hasMany(ProductCategoryProperty::class, 'category_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function propertyValues(): HasMany
    {
        return $this->hasMany(ProductCategoryPropertyValue::class, 'category_id', 'id');
    }

    /**
     * @return BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(
            Product::class,
            'product_category',
            'category_id',
            'product_id',
        );
    }

    /**
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('active', 1);
    }

    /**
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeRoots(Builder $query): Builder
    {
        return $query->whereNull('parent_id');
    }

    /**
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeHasPhotos(Builder $query): Builder
    {
        return $query->whereNotNull('photo');
    }
}
