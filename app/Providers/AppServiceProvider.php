<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;


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
        
        // limited accesss to our route to 
        // 33 times per minute per authenticated user ID or 
        // 3 times per minute per IP adress for guests
        RateLimiter::for('pub_like_api', function (Request $request) {
            return $request->user()
                    ? Limit::perMinute(33)->by($request->user()->id)
                    : Limit::perMinute(3)->by($request->ip());
        });


    }
}
