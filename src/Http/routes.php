<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['web', 'auth', 'locale'],
    'prefix' => '/prices-janice',
    'namespace'=>'CryptaTech\Seat\JanicePriceProvider\Http\Controllers'
], function () {
    Route::get('/configuration')
        ->name('janicepriceprovider::configuration')
        ->uses('JanicePriceProviderController@configuration')
        ->middleware('can:pricescore.settings');

    Route::post('/configuration')
        ->name('janicepriceprovider::configuration.post')
        ->uses('JanicePriceProviderController@configurationPost')
        ->middleware('can:pricescore.settings');
});