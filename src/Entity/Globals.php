<?php

namespace App\Entity;

final class Globals
{
    private string $name;
    private string $value;

    public function getName(): int
    {
        return $this->name;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}