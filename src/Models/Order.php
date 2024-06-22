<?php

namespace Admin\Extend\AdminShopify\Models;

use Admin\Extend\AdminAddress\Traits\Addressed;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Admin\Extend\AdminShopify\Models\Order
 *
 * @property int $id
 * @property string $code
 * @property float $total_price
 * @property float $discount
 * @property float $shipping
 * @property string $payment_currency
 * @property float $payment_commission
 * @property array $details
 * @property int $user_id
 * @property int $payment_method_id
 * @property int $address_id
 * @property int $country_id
 * @property int $currency_id
 * @property int $delivery_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeliveryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentCommission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserId($value)
 * @property string $status
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\Address> $addresses
 * @property-read int|null $addresses_count
 * @property-read \Admin\Extend\AdminShopify\Models\Country|null $country
 * @property-read \Admin\Extend\AdminShopify\Models\Currency|null $currency
 * @property-read \Admin\Extend\AdminShopify\Models\Delivery|null $delivery
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\OrderItem> $orderItems
 * @property-read int|null $order_items_count
 * @property-read \Admin\Extend\AdminShopify\Models\PaymentMethod|null $paymentMethod
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatus($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
    use Addressed;

    /**
     * @var string[]
     */
    protected $fillable = [
        'code',
        'total_price',
        'discount',
        'shipping',
        'payment_commission',
        'details',
        'status',
        'payment_method_id',
        'country_id',
        'currency_id',
        'delivery_id',
        //'user_id',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'code' => 'string',
        'total_price' => 'float',
        'discount' => 'float',
        'shipping' => 'float',
        'payment_commission' => 'float',
        'details' => 'array',
        'status' => 'string',
        'payment_method_id' => 'integer',
        'country_id' => 'integer',
        'currency_id' => 'integer',
        'delivery_id' => 'integer',
        //'user_id' => 'integer',
    ];

    /**
     * @param  array  $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        /** @var \Illuminate\Database\Eloquent\Model $userModel */
        $userModel = new (config('auth.providers.users.model'));
        $userField = \Illuminate\Support\Str::singular($userModel->getTable()) . '_id';
        $this->fillable[] = $userField;
        $this->casts[$userField] = 'integer';
    }

    /**
     * @return HasOne
     */
    public function user(): HasOne
    {
        /** @var \Illuminate\Database\Eloquent\Model $userModel */
        $userModel = new (config('auth.providers.users.model'));
        $userField = \Illuminate\Support\Str::singular($userModel->getTable()) . '_id';
        return $this->hasOne(config('auth.providers.users.model'), 'id', $userField);
    }

    /**
     * @return HasOne
     */
    public function paymentMethod(): HasOne
    {
        return $this->hasOne(PaymentMethod::class, 'id', 'payment_method_id');
    }

    /**
     * @return HasOne
     */
    public function country(): HasOne
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }

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
    public function delivery(): HasOne
    {
        return $this->hasOne(Delivery::class, 'id', 'delivery_id');
    }

    /**
     * @return HasMany
     */
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }
}
