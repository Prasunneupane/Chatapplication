<?php

namespace App\Services\Gateway;

use App\Interfaces\PaymentGatewayInterface;

abstract class BaseGateway implements PaymentGatewayInterface
{
    /**
     * Create a new class instance.
     */
    protected string $apiKey;
    public function __construct(string $apiKey)
    {
        //
        $this->apiKey = $apiKey;
    }
    public function connect(): void
    {
        // Logic to establish a connection with the payment gateway
        echo "Connecting to payment gateway with API key: {$this->apiKey}\n";
    }
    abstract public function charge(float $amount): bool; // Abstract method to be implemented by subclasses
}
