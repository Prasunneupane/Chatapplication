<?php

namespace App\Services\Gateway;

class PaypalGateway extends BaseGateway
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function charge(float $amount): bool
    {
        $this->connect();
        echo "Charged $amount using stripe.\n";
        return true; // Assuming the charge was successful
    }
}
