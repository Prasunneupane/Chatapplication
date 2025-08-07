<?php

namespace App\Listeners;

use App\Events\PostPublished;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class NotifyAdminOfPost implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostPublished $event): void
    {
        //
         Mail::raw("New Post with title {$event->post->title}", function ($message) {
            $message->to('admin@admin.com')
                    ->subject('New Post Created');
        });
    }
}
