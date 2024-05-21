<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Enums\RoleEnum;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
    public function boot()
    {

        $this->registerPolicies();

        //Implicity grant "Super Admin" role all permissions
        //This works i the app by using gate-related functions like auth()->user->can() and @can
        Gate::before(function ($user, $ability){
            return $user->hasRole(RoleEnum::SUPER_ADMIN->value) ? true:null;
        });
    }
}
