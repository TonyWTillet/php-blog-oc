<?php

namespace App\Commands;

use App\Trait\IsLocalhost;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Transport\SendmailTransport;
use Symfony\Component\Mime\Email;
use Throwable;

class SendMail
{
    private IsLocalhost $localhost;

    public function __construct()
    {
        $this->localhost = new IsLocalhost();
    }
    // This will send a mail to the user
    function sendMail($sujet, $contenu, $to, $fichier = NULL): bool
    {
        if($this->localhost->isLocalhost()) {
            $transport = Transport::fromDsn('smtp://a5cfb3f92396f6:6bc13201a0e7d4@smtp.mailtrap.io:2525?encryption=tls&auth_mode=login');
        }
        else {
            $transport = new SendmailTransport();
        }
        $mailer = new Mailer($transport);

        $email = new Email();
        $email->subject($sujet.' - LePetitCactus');
        $email->from('tony.tillet@gmail.com');
        $email->priority(Email::PRIORITY_HIGHEST);
        $email->text(strip_tags($contenu));
        $email->html($contenu);

        if(is_array($to)) {
            foreach ($to as $d) {
                $email->to($d);
            }
        }
        else $email->to($to);
        if(!empty($fichier)) {
            $email->attachFromPath($fichier);
        }
        try {
            $mailer->send($email);
            $success = true;

        } catch (Throwable $e) {
            $success = false;
        }

        return $success;

    }

}
