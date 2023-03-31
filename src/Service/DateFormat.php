<?php
namespace App\Service;
class DateFormat
{
    protected string $format;

    public function __construct(string $format = 'd/m/Y')
    {
        $this->format = $format;
    }
    public function modifyDateFormat(string $date): string
    {
        return date($this->format, strtotime($date));
    }
}
