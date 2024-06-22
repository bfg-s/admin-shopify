<?php

declare(strict_types=1);

namespace Admin\Extend\AdminShopify\Support;

use Admin\Extend\AdminShopify\Processor;
use Illuminate\Support\Facades\Facade;

/**
 * @mixin Processor
 */
class Shopify extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Processor::class;
    }
}
