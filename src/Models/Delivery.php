<?php

namespace Admin\Extend\AdminShopify\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

/**
 * Admin\Extend\AdminShopify\Models\Delivery
 *
 * @property int $id
 * @property string $name
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery query()
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\Order> $orders
 * @property-read int|null $orders_count
 * @property string|null $controller
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereController($value)
 * @property string|null $logo
 * @property array|null $description
 * @property-read mixed $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereJsonContainsLocale(string $column, string $locale, ?mixed $value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereJsonContainsLocales(string $column, array $locales, ?mixed $value)
 * @mixin \Eloquent
 */
class Delivery extends Model
{
    use HasTranslations;

    /**
     * @var string[]
     */
    protected $fillable = [
        'logo',
        'name',
        'description',
        'controller',
        'active',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'logo' => 'string',
        'name' => 'array',
        'description' => 'array',
        'controller' => 'string',
        'active' => 'boolean',
    ];

    /**
     * @var array
     */
    protected array $translatable = [
        'name',
        'description',
    ];

    /**
     * @return HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'delivery_id', 'id');
    }
}
