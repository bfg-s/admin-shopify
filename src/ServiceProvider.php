<?php

namespace Admin\Extend\AdminShopify;

use Admin\Extend\AdminShopify\Commands\UpdateExchangeRatesCommand;
use Admin\ExtendProvider;
use Admin\Core\ConfigExtensionProvider;
use Admin\Extend\AdminShopify\Extension\Config;
use Admin\Extend\AdminShopify\Extension\Install;
use Admin\Extend\AdminShopify\Extension\Navigator;
use Admin\Extend\AdminShopify\Extension\Uninstall;
use Exception;

/**
 * Class ServiceProvider
 * @package Admin\Extend\AdminShopify
 */
class ServiceProvider extends ExtendProvider
{
    /**
     * Extension ID name
     * @var string
     */
    public static string $name = "bfg/admin-shopify";

    /**
     * Extension call slug
     * @var string
     */
    static string $slug = "bfg_admin_shopify";

    /**
     * Extension description
     * @var string
     */
    public static string $description = "A set of tools for an online store";

    /**
     * @var string
     */
    protected string $navigator = Navigator::class;

    /**
     * @var string
     */
    protected string $install = Install::class;

    /**
     * @var string
     */
    protected string $uninstall = Uninstall::class;

    /**
     * @var ConfigExtensionProvider|string
     */
    protected string|ConfigExtensionProvider $config = Config::class;

    /**
     * @return void
     * @throws Exception
     */
    public function boot(): void
    {
        parent::boot();

        $this->loadMigrationsFrom(__DIR__.'/../migrations');

        $this->mergeConfigFrom(__DIR__.'/../configs/admin-shopify.php', 'admin-shopify');

        $this->publishes([
            __DIR__.'/../configs/admin-shopify.php' => config_path('admin-shopify.php'),
        ], 'admin-shopify-config');

        $this->publishes([
            __DIR__.'/../assets' => public_path('vendor/admin-shopify'),
        ], 'admin-shopify-assets');

        $this->commands([
            UpdateExchangeRatesCommand::class,
        ]);

        /**
         * Register publishers lang.
         */
        $this->publishes([
            __DIR__.'/../translations/en' => lang_path('en'),
            __DIR__.'/../translations/ru' => lang_path('ru'),
            __DIR__.'/../translations/uk' => lang_path('uk'),
        ], ['admin-shopify-lang']);
    }
}

