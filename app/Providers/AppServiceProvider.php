<?php

namespace App\Providers;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('approved', function (?User $user, Recipe $recipe) {
            return optional($user)->name == 'Loek van Leeuwen' || $recipe->approved == 1;
        });

        Gate::define('admin', function(?User $user) {
           return optional($user)->name == 'Loek van Leeuwen';
        });

    }
}
