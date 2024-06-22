<?php

namespace Admin\Extend\AdminShopify\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

/**
 * Admin\Extend\AdminShopify\Models\PaymentMethod
 *
 * @property int $id
 * @property string $name
 * @property string|null $controller
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereController($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\Order> $orders
 * @property-read int|null $orders_count
 * @property string|null $logo
 * @property array|null $description
 * @property-read mixed $translations
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereJsonContainsLocale(string $column, string $locale, ?mixed $value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereJsonContainsLocales(string $column, array $locales, ?mixed $value)
 * @mixin \Eloquent
 */
class PaymentMethod extends Model
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
        return $this->hasMany(Order::class, 'payment_method_id', 'id');
    }
}
