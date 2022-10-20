<?php

namespace App\Middleware\Account;

class Session
{
    public function dataSession($session):array {
        return $_SESSION['users'] = $session;
    }
}