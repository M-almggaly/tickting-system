<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function ($user) {
            return Auth::user()->type == '3';
        });

        Gate::define('isEditor', function ($user) {
            return Auth::user()->type == '2';
        });

        Gate::define('isUser', function ($user) {
            return Auth::user()->type == '1';
        });
    }
}
