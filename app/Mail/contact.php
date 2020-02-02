<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Message;

class contact extends Mailable
{
    use Queueable, SerializesModels;

    public $detail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->detail = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->detail);
        return $this->markdown('contact')->with('details', $this->detail)->to('yuhannakapali@gmail.com');
    }
}
