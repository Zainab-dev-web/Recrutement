<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('post-entreprise', function ($user){
            if(Auth::check() && Auth::user()->role_id == 5){
            return  true;
            }
        });

        Gate::define('post-talent', function ($user){
            if(Auth::check() && Auth::user()->role_id == 4){
            return  true;
            }
        });

        Gate::define('post-valid', function ($user){
            if(Auth::check() && Auth::user()->valid == 1){
            return  true;
            }
        });
    }
}
