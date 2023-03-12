<?php

namespace App\Trait;

class IsLocalhost
{
    public function isLocalhost(): bool {
        return in_array($_SERVER['HTTP_HOST'], (array)strstr($_SERVER['HTTP_HOST'], '.test'));
    }
}