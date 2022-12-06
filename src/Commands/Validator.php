<?php

namespace App\Commands;

class Validator
{
    /**
     * @var string[]
     */
    private array $url;
    private string $parentPage;

    public function __construct()
    {
        $this->url  = explode('/', $_SERVER['REQUEST_URI']);
        $this->parentPage = $this->url[2];
    }

    public function redirectParentPage(): void
    {
        header('Location: ' . PANEL.$this->parentPage);
    }
}