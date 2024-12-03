<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('admin', function(User $user){
            return $user->role == 'admin' ? true : false;
        });

        Gate::define('editor', function(User $user){
            return $user->role == 'editor' || $user->role == 'admin' ? true : false;
        });

        Gate::define('viewer', function(User $user){
            return $user->role == 'editor' || $user->role == 'admin' || $user->role == 'viewer' ? true : false;
        });

        Gate::define('productMng', function(User $user){
            return $user->role == 'admin' || $user->role == 'product' ? true : false;
        });

        Gate::define('categoryMng', function(User $user){
            return $user->role == 'admin' || $user->role == 'category' ? true : false;
        });
    }
}
