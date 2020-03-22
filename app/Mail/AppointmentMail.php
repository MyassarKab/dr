<?php

namespace App\Mail;
use App\appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AppointmentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $appointment;

     /**
      * Create a new message instance.
      *
      * @return void
      */
     public function __construct(appointment $appointment)
     {
       
         $this->appointment = $appointment;
     }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Appointment.appointment')->with([
                        'appointment' => $this->appointment,

                    ]);;
    }
}
