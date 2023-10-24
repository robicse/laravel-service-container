<?php

namespace App\Providers;

// use App\Services\PaymentGateway;
use App\Services\PaymentServiceContract;
use App\Services\PaypalGateway;
use App\Services\StripeGateway;
use App\Services\CustomPaymentGateway;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->app->singleton(PaymentGateway::class, function ($app) {
        //     return new PaymentGateway("test123");
        // });

        // $this->app->singleton(PaymentServiceContract::class, function ($app) {
        //     return new PaypalGateway("PaypalTest123");
        // });

        $this->app->singleton(PaymentServiceContract::class, function ($app) {
            if(request()->gateway === 'stripe'){
                return new StripeGateway("StripeTest123");
            }

            return new PaypalGateway("PaypalTest123");
        });

        $this->app->extend(PaymentServiceContract::class, function ($app) {
            return new CustomPaymentGateway("CustomPaymentTest123");
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
