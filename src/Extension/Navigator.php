<?php

namespace Admin\Extend\AdminShopify\Extension;

use Admin\Core\NavGroup;
use Admin\Core\NavigatorExtensionProvider;
use Admin\Extend\AdminShopify\Controllers\AddressesController;
use Admin\Extend\AdminShopify\Controllers\CartsController;
use Admin\Extend\AdminShopify\Controllers\CountriesController;
use Admin\Extend\AdminShopify\Controllers\CurrenciesController;
use Admin\Extend\AdminShopify\Controllers\DeliveriesController;
use Admin\Extend\AdminShopify\Controllers\OrdersController;
use Admin\Extend\AdminShopify\Controllers\PaymentMethodsController;
use Admin\Extend\AdminShopify\Controllers\ProductCategoriesController;
use Admin\Extend\AdminShopify\Controllers\ProductsController;
use Admin\Extend\AdminShopify\Controllers\PromocodesController;
use Admin\Extend\AdminShopify\Controllers\ShopsController;
use Admin\Interfaces\ActionWorkExtensionInterface;

/**
 * Class Navigator
 * @package Admin\Extend\AdminShopify\Extension
 */
class Navigator extends NavigatorExtensionProvider implements ActionWorkExtensionInterface {

    /**
     * @return void
     */
    public function handle(): void
    {
        $appShopsController = "App\\Admin\\Controllers\\ShopsController";
        $this->item('admin-shopify.shops')
            ->resource('shops', class_exists($appShopsController) ? $appShopsController : ShopsController::class)
            ->icon_store();

        $appCartsController = "App\\Admin\\Controllers\\CartsController";
        $this->item('admin-shopify.carts')
            ->resource('carts', class_exists($appCartsController) ? $appCartsController : CartsController::class)
            ->icon_shopping_cart();

        $appOrdersController = "App\\Admin\\Controllers\\OrdersController";
        $this->item('admin-shopify.orders')
            ->resource('orders', class_exists($appOrdersController) ? $appOrdersController : OrdersController::class)
            ->icon_folder_plus();

        $appProductsController = "App\\Admin\\Controllers\\ProductsController";
        $this->item('admin-shopify.products')
            ->resource('products', class_exists($appProductsController) ? $appProductsController : ProductsController::class)
            ->icon_gifts();

        $this->group('admin-shopify.shop_settings', 'settings', function (NavGroup $group) {
            $appCurrenciesController = "App\\Admin\\Controllers\\CurrenciesController";
            $group->item('admin-shopify.currencies')
                ->resource('currencies', class_exists($appCurrenciesController) ? $appCurrenciesController : CurrenciesController::class)
                ->icon_money_bill();

            $appCountriesController = "App\\Admin\\Controllers\\CountriesController";
            $group->item('admin-shopify.countries')
                ->resource('countries', class_exists($appCountriesController) ? $appCountriesController : CountriesController::class)
                ->icon_map_marked();

            $appDeliveriesController = "App\\Admin\\Controllers\\DeliveriesController";
            $group->item('admin-shopify.deliveries')
                ->resource('deliveries', class_exists($appDeliveriesController) ? $appDeliveriesController : DeliveriesController::class)
                ->icon_truck_loading();

            $appPaymentMethodsController = "App\\Admin\\Controllers\\PaymentMethodsController";
            $group->item('admin-shopify.payment_methods')
                ->resource('payment_methods', class_exists($appPaymentMethodsController) ? $appPaymentMethodsController : PaymentMethodsController::class)
                ->icon_wallet();

            $appProductCategoriesController = "App\\Admin\\Controllers\\ProductCategoriesController";
            $group->item('admin-shopify.categories')
                ->resource('categories', class_exists($appProductCategoriesController) ? $appProductCategoriesController : ProductCategoriesController::class)
                ->icon_hamburger();

        })->icon_cogs();

        $appPromocodesController = "App\\Admin\\Controllers\\PromocodesController";
        $this->item('admin-shopify.promocodes')
            ->resource('promocodes', class_exists($appPromocodesController) ? $appPromocodesController : PromocodesController::class)
            ->icon_percent();
    }
}
