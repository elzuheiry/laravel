<?php

use App\Http\Controllers\Users\UsersController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;





Route::group(["middleware" => "web"], function(){
   
    Route::post("store", [UsersController::class, "store"]) -> name("store");
    Route::post("logout", [UsersController::class, "destroy"]) -> name("destroy");
    Route::post("signIn", [UsersController::class, "userLogin"]) -> name("signIn");

    Route::group(["middleware" => "auth"], function(){
        Route::get("profile", [UsersController::class, "profile"]) -> name("profile");
    });

    Route::group(["middleware" => "guest"], function(){
        Route::get("login", [UsersController::class, "login"]) -> name("login");
        Route::get("register", [UsersController::class, "register"]) -> name("register");
    });
    
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...

        Route::group(["middleware" => "web"], function(){
   
            Route::post("store", [UsersController::class, "store"]) -> name("store");
            Route::post("logout", [UsersController::class, "destroy"]) -> name("destroy");
            Route::post("signIn", [UsersController::class, "userLogin"]) -> name("signIn");
        
            Route::group(["middleware" => "auth"], function(){
                Route::get("profile", [UsersController::class, "profile"]) -> name("profile");
            });
        
            Route::group(["middleware" => "guest"], function(){
                Route::get("login", [UsersController::class, "login"]) -> name("login");
                Route::get("register", [UsersController::class, "register"]) -> name("register");
            });
            
        });
    });