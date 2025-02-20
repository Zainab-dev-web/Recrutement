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
            return true;
            }
        });

        Gate::define('post-resultat', function ($user){
            if(Auth::check() && Auth::user()->resultat_id == null){
                return true;
            }
        });

        Gate::define('admin_edit', function($user){
            if($user->role_id==1){
            return true;
            }
            });
        Gate::define('hrt_valid', function($user){
            if($user->role_id==2 ){
            return true;
            }
            });
        Gate::define('hre_valid', function($user){
            if($user->role_id==3){
            return true;
            }
            });
        Gate::define('WebStop', function($user){
            if($user->role_id!=5 &&  $user->role_id!=4){
            return true;
            }
            });
            Gate::define('hrStop', function($user){
                if($user->role_id!=5 && $user->role_id!=4 && $user->role_id!=3  && $user->role_id!=2  ){
                return true;
                }
                });
    }
}
