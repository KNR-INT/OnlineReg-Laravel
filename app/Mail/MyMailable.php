<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyMailable;

class MyMailable extends Mailable
{
    use Queueable, SerializesModels;

    
    public $emails;
    public function __construct($emails){
        $this->emails = $emails;
    }

    public function build()
    {
        return $this->subject('OTP for Application Submission to NPS YPR')
                    ->view('otpgeneration')  
                    ->with('otpgeneration', $this->emails);  

    }
}
?>