<?php

namespace App\Http\Controllers;

use App\Interfaces\MessageInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //For this example, we will inject the MessageInterface into the UserController
    // public $message;
    // public function __construct(MessageInterface $message)
    // {
    //     $this->message = $message;  
    //     // You can add middleware or other initializations here if needed
    // }

    public function index()
    {

        $emailService = app(MessageInterface::class)->get('email');
        $smsService = app(MessageInterface::class)->get('sms');
        // dd($emailService);
        // In this way you can use service based Interface  using the same interface with user defined key
        echo $emailService->send('test@gmail.com',"Email sent from UserController");
        echo "<br>";
        echo $smsService->send('1234567890',"SMS sent from UserController");




        // return $this->message->send('test@gmail.com','Email sent from UserController');
        // "hello from UserController";
    }
}
