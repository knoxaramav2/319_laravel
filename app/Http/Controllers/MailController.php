<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeLetter;
use Illuminate\Mail\Mailer;
use Mailgun\Mailgun;
use Mail;

class MailController extends Controller
{
    public function sendMail(){
        
            # Include the Autoloader (see "Libraries" for install instructions)
            require_once(__DIR__.'/../../../vendor/autoload.php');


    # Instantiate the client.
    $mgClient = new \Mailgun\Mailgun('key-726c0401e893e106e9e399e4f4127135');
    $domain = "sandbox25a34ee8930348e6a5f2f669b6feb845.mailgun.org";

    # Make the call to the client.
    $result = $mgClient->sendMessage("$domain",
            array('from'    => 'Mailgun Sandbox <postmaster@sandbox25a34ee8930348e6a5f2f669b6feb845.mailgun.org>',
                    'to'      => 'Woodrow <zewegut@letsmail9.com>',
                    'subject' => 'lll Woodrow',
                    'text'    => 'Congratulations Woodrow, you just sent an email with Mailgun!  You are truly awesome! ',
                    'view'    => 'help'));

    return view('welcome');
    # You can see a record of this email in your logs: https://mailgun.com/app/logs .

    # You can send up to 300 emails/day from this sandbox server.
    # Next, you should add your own domain so you can send 10,000 emails/month for free.
    }
}
