<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Saade\FilamentLaravelLog\Pages\ViewLog;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ViewLog::can(function (User $user) {
            return $user->isSuperAdmin();
        });
    }
}
