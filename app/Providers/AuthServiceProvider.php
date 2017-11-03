<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('listar', function($user){
            if($user->isAdmin()){
                return true;
            }
        });

        Gate::define('detalhar', function($user){
            if($user->isAdmin()){
                return true;
            }
        });

        Gate::define('cadastrar', function($user){
            if($user->isAdmin()){
                return true;
            }
        });

        Gate::define('editar', function($user){
            if($user->isAdmin()){
                return true;
            }
        });

        Gate::define('deletar', function($user){
            if($user->isAdmin()){
                return true;
            }
        });
    }
}
