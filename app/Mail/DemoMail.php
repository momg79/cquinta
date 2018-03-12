<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Mail\Requests;
use Illuminate\Http\Request;


class DemoMail extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * The order instance.
     *
     * @var data
     */

    protected $data = array();

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('aministrador@clubquinta.cl','Club Quinta')
                    ->subject('Información deuda pendiente periodo '.$this->data["periodo"])
                    ->view('emails.demo')
                    ->with([
                        'nombre' => $this->data["nombre"],
                        'deuda' => $this->data["deuda"],
                        'periodo' => $this->data["periodo"],
                        'jugador' => $this->data["jugador"],
                    ]);
    }

   

}
