<?php

namespace Admin\Extend\AdminShopify\Extension;

use Admin\Core\InstallExtensionProvider;
use Admin\Interfaces\ActionWorkExtensionInterface;
use Illuminate\Support\Facades\Schema;

/**
 * Class Install
 * @package Admin\Extend\AdminShopify\Extension
 */
class Install extends InstallExtensionProvider implements ActionWorkExtensionInterface {

    /**
     * @return void
     */
    public function handle(): void
    {
        $this->command->call('vendor:publish', [
            '--tag' => "admin-shopify-lang",
            '--force' => true,
        ]);

        $this->command->call('vendor:publish', [
            '--tag' => "admin-shopify-assets",
        ]);

        $this->command->call('vendor:publish', [
            '--tag' => "admin-shopify-config",
        ]);

        if (! Schema::hasTable('products')) {

            $this->command->call('migrate', [
                '--path' => "vendor/bfg/admin-shopify/migrations",
            ]);
        }
    }
}
