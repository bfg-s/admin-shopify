<?php

namespace Admin\Extend\AdminShopify\Models;

use Admin\Extend\AdminComment\Traits\Commentable;
use Admin\Extend\AdminFavorite\Traits\Favoritable;
use Admin\Extend\AdminSeo\Traits\Seoable;
use Admin\Extend\AdminShopify\Support\Shopify;
use Bfg\Repository\Repositoriable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Collection;
use Spatie\Translatable\HasTranslations;

/**
 * Admin\Extend\AdminShopify\Models\Product
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $short_description
 * @property float $rating
 * @property int $views
 * @property bool $new
 * @property bool $best_selling
 * @property bool $active
 * @property int $shop_id
 * @property-read mixed $translations
 * @property-read int|null $prices_count
 * @property-read int|null $images_count
 * @property-read int|null $categories_count
 * @property-read int|null $cart_items_count
 * @property-read int|null $category_property_values_count
 * @property-read int|null $order_items_count
 * @property-read int|null $by_with_count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\ProductCategory> $categories
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\ProductImage> $images
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\ProductPrice> $prices
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\CartItem> $cartItems
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\ProductCategoryPropertyValue> $categoryPropertyValues
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\OrderItem> $orderItems
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Product> $byWith
 * @property-read \Admin\Extend\AdminSeo\Models\Seo|null $seo
 * @property-read \Admin\Extend\AdminShopify\Models\ProductPrice|null $price
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBestSelling($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereNew($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereViews($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereShopId($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminFavorite\Models\Favorite> $favorites
 * @property-read int|null $favorites_count
 * @property-read \Admin\Extend\AdminShopify\Models\Repository|null $repository
 * @method static Builder|Product active()
 * @method static Builder|Product whereSlug(string $slug)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminComment\Models\Comment> $commentaries
 * @property-read int|null $commentaries_count
 * @method static Builder|Product whereJsonContainsLocale(string $column, string $locale, ?mixed $value)
 * @method static Builder|Product whereJsonContainsLocales(string $column, array $locales, ?mixed $value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    use Seoable;
    use HasTranslations;
    use Favoritable;
    use Repositoriable;
    use Commentable;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'description',
        'short_description',
        'views',
        'new',
        'best_selling',
        'rating',
        'active',
        'shop_id',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'name' => 'array',
        'description' => 'array',
        'short_description' => 'array',
        'views' => 'int',
        'rating' => 'int',
        'new' => 'boolean',
        'best_selling' => 'boolean',
        'active' => 'boolean',
        'shop_id' => 'int',
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
     * @var float|null
     */
    protected float|null $rating = null;

    /**
     * @var array|null
     */
    protected array|null $properties = null;

    /**
     * @var int|null
     */
    protected int|null $countOfCommentaries = null;

    /**
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
            ProductCategory::class,
            'product_category',
            'product_id',
            'category_id',
        );
    }

    /**
     * @return BelongsToMany
     */
    public function categoryPropertyValues(): BelongsToMany
    {
        return $this->belongsToMany(ProductCategoryPropertyValue::class, 'product_property_values', 'product_id', 'property_value_id');
    }

    /**
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function cartItems(): HasMany
    {
        return $this->hasMany(CartItem::class, 'product_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'product_id', 'id');
    }

    /**
     * @return BelongsToMany
     */
    public function byWith() : BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_by_withs', 'product_id', 'by_with_id');
    }

    /**
     * @return HasMany
     */
    public function prices(): HasMany
    {
        return $this->hasMany(ProductPrice::class, 'product_id', 'id');
    }

    /**
     * @return HasOne
     */
    public function price(): HasOne
    {
        return $this->hasOne(ProductPrice::class, 'product_id', 'id')
            ->where('currency_id', Shopify::getCurrency()->id);
    }

    /**
     * @return float
     */
//    public function getRatingAttribute(): float
//    {
//        if ($this->rating !== null) {
//
//            return $this->rating;
//        }
//
//        $commentaries = $this->commentaries;
//
//        if ($commentaries->isNotEmpty()) {
//
//            $rating = $commentaries->sum('rating') / $commentaries->count();
//
//            return $this->rating = round($rating, 1);
//        }
//
//        return $this->rating = 0.0;
//    }

    /**
     * @param  Builder  $q
     * @return Builder
     */
    public function scopeActive(Builder $q): Builder
    {
        return $q->where('active', 1);
    }

    /**
     * @param  Builder  $q
     * @param  string  $slug
     * @return Builder
     */
    public function scopeWhereSlug(Builder $q, string $slug): Builder
    {
        return $q->whereHas('seo', function (Builder $q) use ($slug) {
            $q->where('slug', $slug);
        });
    }

    /**
     * @return $this
     */
    public function incrementView(): static
    {
        $this->increment('views');

        return $this;
    }

    /**
     * @param  string  $name
     * @return string
     */
    public function route(string $name): string
    {
        return route($name, $this->seo->slug);
    }

    /**
     * @param  ProductCategoryProperty  $property
     * @return Collection
     */
    public function properties(ProductCategoryProperty $property)
    {
        if (
            isset($this->properties[$property->id])
            && $this->properties[$property->id] !== null
        ) {
            return $this->properties[$property->id];
        }

        return $this->properties[$property->id] = $this->categoryPropertyValues()
            ->where('category_property_id', $property->id)
            ->get();
    }

    /**
     * @return int
     */
    public function countOfCommentaries(): int
    {
        if ($this->countOfCommentaries !== null) {

            return $this->countOfCommentaries;
        }

        return $this->countOfCommentaries = $this->commentaries()->count();
    }
}
