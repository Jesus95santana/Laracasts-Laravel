<?php

class Beverage
{
    private $color;

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($arg)
    {
        $lowercase = strtolower($arg);
        $this->color = $lowercase;
    }
}

$soda = new Beverage();