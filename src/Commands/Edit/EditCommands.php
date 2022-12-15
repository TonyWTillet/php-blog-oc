<?php

namespace App\Commands\Edit;

class EditCommands
{
    private string $table;

    public function __construct(string $table)
    {
        $this->table = $table;
    }

    public function save(): void
    {
        $this->save();
    }
}