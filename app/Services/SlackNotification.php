<?php

namespace App\Services;

use Faker\Provider\Base;

class SlackNotification extends BaseNotification
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function send(string $to, string $message) : bool {
        $formattedMessage = $this->formatMessage($message);
        $this->log("Sending slack to $to: ");

        echo "Slack sent to $to with message: $formattedMessage\n";
        return true; // Assuming the message was sent successfully
    }
}
