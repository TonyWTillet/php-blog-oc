<?php

namespace App\Controller\Back;

use App\Middleware\Account\Authenticate;
use App\Middleware\Account\Session;
use App\Middleware\Account\User;
use JetBrains\PhpStorm\NoReturn;


class LoginController extends BackController
{

    /**
     * It logs in a user
     */
    #[NoReturn] public function logger(): void
    {
        $user = new User();
        $loggin = $this->isLoggin();

        if(!$loggin) {
            if (!empty($_POST['password']) && !empty($_POST['email'])) {

                $email = $_POST['email'];
                $password = $_POST['password'];


                $user_data = $user->getUser($email);

                if(!empty($user_data)) {
                    $logger = new Authenticate();
                    $user_verification = $logger->attempt($password, $user_data['password']);

                    if ($user_verification) {
                        $session = new Session();
                        $session->dataSession($user_data);

                        header("location:".PANEL."dashboard");
                        exit();
                    } else {

                        $error = 'Mot de passe invalide';
                    }
                } else {
                    $error = "Mauvais email";
                }

            }
        } else {

            header("location:".PANEL."dashboard");
            exit();
        }

        require $this->Twig('login', $error, 'error');
    }

}