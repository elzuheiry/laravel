<?php

use App\Http\Controllers\Admins\AdminsController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...

        Route::group(["prefix" => "admin", "middleware" => ["web"]], function(){

            Route::post("createOffer", [AdminsController::class, "store"])->name("createOffer");
            Route::post("update/{id}", [AdminsController::class, "update"])->name("updateOffer");
            
        
            Route::group(["middleware" => "admin"], function() {
                Route::get("/", [AdminsController::class, "getDashboard"]) -> name("dashboard");
                Route::get("create-offer", [AdminsController::class, "getNewOffer"]) -> name("newOffer");
                Route::get("{id}/edit", [AdminsController::class, "getEdit"])->name("edit");
                Route::get("{id}/destroy", [AdminsController::class, "destroy"])->name("delete");
            });
        
        });
    });