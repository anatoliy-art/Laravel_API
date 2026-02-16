<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

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
        Gate::define('admin', function (User $user) {
            return $user->roles === 'admin';
        });

        Gate::define('manager', function (User $user) {
            return $user->roles === 'manager' || $user->roles === 'admin';
        });

        Gate::define('calculator', function (User $user) {
            return $user->roles === 'calculator' || $user->roles === 'admin';
        });

        Gate::define('deliver', function (User $user) {
            return $user->roles === 'deliver' || $user->roles === 'admin';
        });

    }
}
