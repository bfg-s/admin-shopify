<?php

namespace Admin\Extend\AdminShopify\Models;

use Admin\Extend\AdminAddress\Traits\Addressed;
use Admin\Extend\AdminSeo\Traits\Seoable;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\Translatable\HasTranslations;

/**
 * Admin\Extend\AdminShopify\Models\Shop
 *
 * @property int $id
 * @property string|null $photo
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property int|null $country_id
 * @property string $work_weekdays_from
 * @property string $work_weekdays_to
 * @property string $work_weekends_from
 * @property string $work_weekends_to
 * @property int $work_in_monday
 * @property int $work_in_tuesday
 * @property int $work_in_wednesday
 * @property int $work_in_thursday
 * @property int $work_in_friday
 * @property int $work_in_saturday
 * @property int $work_in_sunday
 * @property int $active
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Admin\Extend\AdminShopify\Models\Address|null $address
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop query()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereWorkInFriday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereWorkInMonday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereWorkInSaturday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereWorkInSunday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereWorkInThursday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereWorkInTuesday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereWorkInWednesday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereWorkWeekdaysFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereWorkWeekdaysTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereWorkWeekendsFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereWorkWeekendsTo($value)
 * @property-read \Admin\Extend\AdminShopify\Models\Country|null $country
 * @property-read User|null $user
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Admin\Extend\AdminShopify\Models\Address> $addresses
 * @property-read int|null $addresses_count
 * @property-read \Admin\Extend\AdminSeo\Models\Seo|null $seo
 * @property string|null $url
 * @property-read mixed $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereJsonContainsLocale(string $column, string $locale, ?mixed $value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereJsonContainsLocales(string $column, array $locales, ?mixed $value)
 * @mixin \Eloquent
 */
class Shop extends Model
{
    use Addressed;
    use Seoable;
    use HasTranslations;

    /**
     * @var string[]
     */
    protected $fillable = [
        'photo',
        'name',
        'description',
        'url',
        'country_id',
        'work_weekdays_from',
        'work_weekdays_to',
        'work_weekends_from',
        'work_weekends_to',
        'work_in_monday',
        'work_in_tuesday',
        'work_in_wednesday',
        'work_in_thursday',
        'work_in_friday',
        'work_in_saturday',
        'work_in_sunday',
        'active',
        //'user_id',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'photo' => 'string',
        'name' => 'array',
        'description' => 'array',
        'url' => 'string',
        'country_id' => 'integer',
        'work_weekdays_from' => 'string',
        'work_weekdays_to' => 'string',
        'work_weekends_from' => 'string',
        'work_weekends_to' => 'string',
        'work_in_monday' => 'bool',
        'work_in_tuesday' => 'bool',
        'work_in_wednesday' => 'bool',
        'work_in_thursday' => 'bool',
        'work_in_friday' => 'bool',
        'work_in_saturday' => 'bool',
        'work_in_sunday' => 'bool',
        'active' => 'bool',
        //'user_id' => 'integer',
    ];

    /**
     * @var array
     */
    protected array $translatable = [
        'name',
        'description',
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
    public function country(): HasOne
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }

    /**
     * @return HasOne
     */
    public function user(): HasOne
    {
        /** @var \Illuminate\Database\Eloquent\Model $userModel */
        $userModel = new (config('auth.providers.users.model'));
        $userField = \Illuminate\Support\Str::singular($userModel->getTable()) . '_id';
        return $this->hasOne(User::class, 'id', $userField);
    }
}
