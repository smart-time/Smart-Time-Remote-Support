<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        $domain = url('/');
        if($domain == "https://lookatme.net"){
            App::setLocale('en');
        }elseif($domain == "https://kijkmee.net"){
            App::setLocale('nl');
        }elseif($domain == "https://voiravecmoi.net"){
            App::setLocale('fr');
        }else{
            App::setLocale('en');
        }
    }
}
