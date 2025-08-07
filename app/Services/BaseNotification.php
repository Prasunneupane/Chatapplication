<?php

namespace App\Services;

abstract class BaseNotification
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    protected function log(string $message): void
    {
        echo "Log: ".now() . ":$message\n" ;
    }

    protected function formatMessage(string $message): string
    {
        // Format the message as needed
        return strtoupper($message);
    }

    abstract public function send(string $to, string $message): bool; // Abstract method to be implemented by subclasses
}
