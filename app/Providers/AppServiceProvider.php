<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Pagination\Paginator;
use App\Models\form;
use App\Models\User;

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
        $register=form::all()->count(); 
        view()->share('reg_user', $register);

        $success_reg=form::where('payment','=','success')->count(); 
        view()->share('success_reg', $success_reg);

        $admin=User::all()->count(); 
        view()->share('admin', $admin);

        // $article=View::all()->count();
        // views($article)->record();
        // view()->share('include.header', compact('article'));
        
        Paginator::useBootstrap();
    }
}
