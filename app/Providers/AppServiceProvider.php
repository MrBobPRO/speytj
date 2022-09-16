<?php

namespace App\Providers;

use App\Models\Atx;
use App\Models\Nosology;
use App\Models\Top;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
      View::composer('*', function ($view) {
        $view->with('route', Route::currentRouteName());
      });

      View::composer(['layouts.header', 'layouts.footer', 'products.index'], function ($view) {
        $defaultNosology = Nosology::orderBy('title')->first()->slug;
        $defaultAtx = Atx::orderBy('title')->first()->slug;

        $view->with('defaultNosology', $defaultNosology)
          ->with('defaultAtx', $defaultAtx);
      });

      View::composer('menu.top-products', function ($view) {
        $view->with('topProducts', Top::where('product_id', '!=', null)->get());
      });
    }
}
