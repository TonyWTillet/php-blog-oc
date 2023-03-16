<?php

namespace App\Entity;

final class Globals
{
    private string $name;
    private string $value;

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
