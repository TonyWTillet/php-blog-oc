<?php

namespace App\Commands;

use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Transport\SendmailTransport;
use Symfony\Component\Mime\Email;
use Throwable;

class SendMail
{
    function sendMail($sujet, $contenu, $to, $fichier = NULL): bool
    {
        if($this->isLocalhost()) {

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
            dump($e->getMessage());
        }

        return $success;

    }

    public function isLocalhost(): bool {
        return in_array($_SERVER['HTTP_HOST'], array('localhost:4554','localhost','127.0.0.1','192.168.1.72','wagaia')) or strstr($_SERVER['HTTP_HOST'],'.test');
    }
}