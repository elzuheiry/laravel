<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
// use \Mcamara\LaravelLocalization\Traits\LoadsTranslatedCachedRoutes;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...
        Route::get('/', [Controller::class, "index"])->name("index");
    });