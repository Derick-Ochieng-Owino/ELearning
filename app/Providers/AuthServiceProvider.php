<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate; // ✅ THIS IS THE CRITICAL LINE

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('isSuperAdmin', function ($user) {
            return $user->role === 'super_admin';
        });

        Gate::define('isAdmin', function ($user) {
            return $user->role === 'admin';
        });

        Gate::define('isTeacher', function ($user) {
            return $user->role === 'teacher';
        });

        Gate::define('isStudent', function ($user) {
            return $user->role === 'student';
        });
    }
}
