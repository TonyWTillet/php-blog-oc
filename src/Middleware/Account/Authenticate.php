<?php

namespace App\Middleware\Account;

class Authenticate
{

    /**
     * It checks if the password is correct.
     *
     * @param string password The password that the user has entered.
     * @param string user_password The password stored in the database.
     *
     * @return bool A boolean value.
     */
    public function attempt(string $password, string $user_password):bool {


        if(password_verify($password, $user_password)) {
            return true;
        }

        return false;

    }
}