<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;


class SendEmail extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $user;
    protected $id;

    public function __construct($id_order)
    {
        $this->id = $id_order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('adm.kreasiam@gmail.com')
            ->view('emailku')
            ->with(
                [
                    'nama' => Auth::user()->name,
                    'id_order' => $this->id,
                ]
            );
    }
}
