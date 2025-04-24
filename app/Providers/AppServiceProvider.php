<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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
       view()->share('actual_url',asset('../assets'));
       view::composer('*',function($view){
        $user_id = Session::get('user_id');
        $cart_count = 0;
        if($user_id){
            $cart_count = DB::table('cart')->where('user_id',$user_id)->count();
        }
        $view->with('cart_count',$cart_count);
       });
    }
}
