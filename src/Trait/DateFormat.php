<?php
namespace App\Trait;
class DateFormat
{
    protected string $format;

    public function __construct(string $format = 'd/m/Y')
    {
        $this->format = $format;
    }
    public function ModifyDateFormat(string $date): string
    {
        return date($this->format, strtotime($date));
    }
}