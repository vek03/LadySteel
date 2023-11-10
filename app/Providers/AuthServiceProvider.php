<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use App\Models\User;

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
        Gate::define('victim-actions', function (User $user) {
            return $user->id_type === 1
                        ? Response::allow()
                        : Response::denyAsNotFound();
        });

        Gate::define('attendant-actions', function (User $user) {
            return $user->id_type === 2
                        ? Response::allow()
                        : Response::denyAsNotFound();
        });

        Gate::define('supervisor-actions', function (User $user) {
            return $user->id_type === 3
                        ? Response::allow()
                        : Response::denyAsNotFound();
        });

        Gate::define('supervisor-attendant', function (User $user, User $attendant) {
            return $user->id === $attendant->id_supervisor
                        ? Response::allow()
                        : Response::denyAsNotFound();
        });
    }
}
