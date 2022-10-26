<?php

namespace App\Middleware\Account;

class Session
{
    /**
     * It sets the session data to the users array.
     *
     * @param session The session data to be stored in the session.
     *
     * @return array The session data is being returned.
     */
    public function dataSession($session):array {
        return $_SESSION['users'] = $session;
    }
}