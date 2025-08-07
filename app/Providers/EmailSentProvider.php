<?php

namespace App\Providers;

use App\Services\EmailService;
use App\Services\SMSService;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\MessageInterface;

class EmailSentProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        // $this->app->bind(
        //     MessageInterface::class,
        //     EmailService::class
        // );

        //  $this->app->bind(
        //     MessageInterface::class,
        //     SMSService::class
        // );
 
        //so binding two different services to the same interface
        //this will allow us to switch between EmailService and SMSService
        //based on the context or configuration but it will create a conflict because only the last bind will be used
        //to resolve this, we can use different interfaces or use a factory pattern to decide which service to use at runtime
        //for now, we will just keep it as is for demonstration purposes
        $this->app->bind(MessageInterface::class, function ($app) {
            // You can add logic here to decide which service to use
            // For example, based on key value which is passed from controller
            return collect([
                'email'=>app(EmailService::class),
                'sms'=>app(SMSService::class)]);
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
