<?php

namespace App\Services;

use App\Interfaces\MessageInterface;

class EmailService implements MessageInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function send($receipent, $message)
    {
        // Logic to send the message
        // For example, you might use a mail service or an API to send the message
        // Here we just return true for demonstration purposes
        return 'Email sent to ' . $receipent . ' with message: ' . $message;
    }
}
