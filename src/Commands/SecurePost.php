<?php

namespace App\Commands;

class SecurePost
{
    public function SecurePost(array $data): array
    {
        foreach ($data as $key => $value) {
            $data[$key] = trim($value);
            $data[$key] = strip_tags($value);
            $data[$key] = stripslashes($value);
            $data[$key] = htmlspecialchars($value);
        }
        return $data;
    }
}