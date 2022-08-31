<?php

namespace App\Providers;

<<<<<<< HEAD
=======
use App\Models\SanPham;
>>>>>>> 323a2e6eee4a39f13a7a3e1c847ca80cd59caed1
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
<<<<<<< HEAD

        view()->share('thietbi',$thietbi);
=======
        view()->share('thietbi', $thietbi);

>>>>>>> 323a2e6eee4a39f13a7a3e1c847ca80cd59caed1
    }
}
