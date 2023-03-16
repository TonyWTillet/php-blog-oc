<?php

namespace App\Commands;

class PostVerifications
{
    public function postVerifications(): bool
    {
        if (empty($_POST)) {
            return false;
        }
        return true;
    }
}
