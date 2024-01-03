<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Status;
use App\Models\User;
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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('administrador', function (User $user){
            return $user->email=='admin@admin.com';
        });
        Gate::define('EsUsuarioStatus', function (User $user,Status $status){
            return $user->id==$status->file->registration->user->id;
        });
        //
    }
}
