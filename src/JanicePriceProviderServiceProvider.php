<?php

namespace CryptaTech\Seat\JanicePriceProvider;

use Seat\Services\AbstractSeatPlugin;

class JanicePriceProviderServiceProvider extends AbstractSeatPlugin
{
    public function boot(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/priceproviders.backends.php','priceproviders.backends');
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'janicepriceprovider');
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'janicepriceprovider');
    }

    /**
     * Return the plugin public name as it should be displayed into settings.
     *
     * @return string
     * @example SeAT Web
     *
     */
    public function getName(): string
    {
        return 'Janice Price Provider';
    }

    /**
     * Return the plugin repository address.
     *
     * @example https://github.com/eveseat/web
     *
     * @return string
     */
    public function getPackageRepositoryUrl(): string
    {
        return 'https://github.com/crypta-tech/seat-prices-janice';
    }

    /**
     * Return the plugin technical name as published on package manager.
     *
     * @return string
     * @example web
     *
     */
    public function getPackagistPackageName(): string
    {
        return 'seat-prices-janice';
    }

    /**
     * Return the plugin vendor tag as published on package manager.
     *
     * @return string
     * @example eveseat
     *
     */
    public function getPackagistVendorName(): string
    {
        return 'cryptatech';
    }
}