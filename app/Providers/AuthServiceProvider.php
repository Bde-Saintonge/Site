<?php

namespace App\Providers;

use App\Models\Office;
use App\Models\Post;
use App\Models\User;
use App\Policies\AdminPostPolicy;
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
        // FIXME: La policy n'existe pas.
        Post::class => AdminPostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('verified-role', function (
            User $user,
            string $checkedRole
        ) {
            foreach ($user->roles as $userRole) {
                if ($userRole->name === $checkedRole) {
                    return true;
                }
            }

            return false;
        });

        Gate::define('verified-office', function (string $checkedOffice) {
            if (
                $this->user->office_id ===
                Office::where('code_name', $checkedOffice)->first()->id
            ) {
                return true;
            }

            return false;
        });
    }
}
