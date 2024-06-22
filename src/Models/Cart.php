<?php

namespace Admin\Extend\AdminShopify\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Admin\Extend\AdminShopify\Models\Cart
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $session_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\CartItem> $cartItems
 * @property-read int|null $cart_items_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUserId($value)
 * @mixin \Eloquent
 */
class Cart extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        //'user_id',
        'session_id',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        //'user_id' => 'integer',
        'session_id' => 'string',
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
     * @return HasMany
     */
    public function cartItems(): HasMany
    {
        return $this->hasMany(CartItem::class, 'cart_id', 'id');
    }
}
