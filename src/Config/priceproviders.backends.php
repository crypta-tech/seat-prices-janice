<?php

use CryptaTech\Seat\JanicePriceProvider\PriceProvider\JanicePriceProvider;

return [
    'cryptatech/seat-prices-janice' => [
        'backend'=> JanicePriceProvider::class,
        'label'=>'janicepriceprovider::janice.janice_price_provider',
        'plugin'=>'cryptatech/seat-prices-janice',
        'settings_route' => 'janicepriceprovider::configuration',
    ]
];