<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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

        Gate::define('accessPanel', function($user) {
            return $user->role(['0','1','2','3','4','5','6','7','8','9']);
        });

        Gate::define('accessArticles', function($user) {
            return $user->role(['0','1','2','3']);
        });

        Gate::define('accessDashboard', function($user) {
            return $user->role(['0','1']);
        });

        Gate::define('accessUsers', function($user) {
            return $user->role(['0']);
        });

        //
    }
}
