<?php

declare(strict_types=1);

namespace Admin\Extend\AdminShopify;

use Admin\Extend\AdminShopify\Models\Currency;
use Illuminate\Support\Facades\Cookie;

class Processor
{
    /**
     * @var Currency|null
     */
    protected Currency|null $currency = null;

    /**
     * @return Currency
     */
    public function getCurrency(): Currency
    {
        if ($this->currency) {

            return $this->currency;
        }

        $code = request()->cookie('currency');

        if (! $code) {
            $model = Currency::where('active', 1)
                ->first();
        } else {
            $model = Currency::where('code', $code)
                ->where('active', 1)
                ->first();
        }

        return $this->currency = $model;
    }

    /**
     * @param  Currency  $currency
     * @return $this
     */
    public function setCurrency(Currency $currency): static
    {
        $this->currency = $currency;

        Cookie::queue(
            Cookie::forever('currency', $currency->code)
        );

        return $this;
    }
}
