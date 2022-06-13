<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use App\Policies\AdminPostPolicy;
use App\Policies\PostPolicy;
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
        'App\Models\Model' => 'App\Policies\ModelPolicy',
        Post::class => AdminPostPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('verified-admin', function (User $user) {
            foreach ($user->roles as $userRole) {
                if ($userRole->name ==='admin') {
                    return true;
                }
            }
            return false;
        });

        Gate::define('verified-bde', function (User $user) {
            foreach ($user->roles as $userRole) {
                if ($userRole->name ==='bde') {
                    return true;
                }
            }
            return false;
        });
    }
}
