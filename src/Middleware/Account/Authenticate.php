<?php

namespace App\Middleware\Account;

class Authenticate
{
    public function is_loggedin():bool
    {
        if(isset($_SESSION['users']))
        {
           return true;
        }
        return false;
    }

    public function attempt($password, $user_password):bool {


        if(password_verify($password, $user_password)) {
            return true;
        }

        return false;

    }
}