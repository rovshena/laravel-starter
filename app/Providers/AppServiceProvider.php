<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //        Gate::define('edit-job', function (User $user, Job $job) {
        //            return $user->id === $job->employer->user_id;
        //        });
    }
}
