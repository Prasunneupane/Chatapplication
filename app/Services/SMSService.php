<?php

namespace App\Services;

use App\Interfaces\MessageInterface;

class SMSService implements MessageInterface //remember i am using same interface as EmailService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function send($receipent, $message)//also same method as EmailService but can be different logic
    {
        // Logic to send the message
        // For example, you might use a mail service or an API to send the message
        // Here we just return true for demonstration purposes
        return 'Email sent to ' . $receipent . ' with message: ' . $message;
    }
}
