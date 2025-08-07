<?php

namespace App\Providers;

use App\Interfaces\PaymentGatewayInterface;
use App\Services\Gateway\StripeGateway;
use Illuminate\Support\ServiceProvider;

class PaymentGatewayProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PaymentGatewayInterface::class, function () {
            return new StripeGateway('Your-Stripe-API-Key'); // Replace with your actual API key
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
