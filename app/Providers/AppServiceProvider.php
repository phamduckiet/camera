<?php

namespace App\Providers;

use App\Models\SanPham;
use App\Models\thietbi;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        $thietbi = thietbi::all();
        view()->share('thietbi', $thietbi);

    }
}
