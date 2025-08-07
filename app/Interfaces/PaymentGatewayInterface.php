<?php

namespace App\Interfaces;

interface PaymentGatewayInterface
{
    //
    public function connect(): void; // Method to establish a connection with the payment gateway
    public function charge(float $amount): bool;
}
