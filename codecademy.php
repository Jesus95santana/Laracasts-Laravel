<?php

class Beverage
{
    public $temperature;

    function getInfo()
    {
        return "This beverage is $this->temperature.";
    }
}

class Milk extends Beverage
{
    public $temperature;

    public function __construct()
    {
        $this->temperature = 'cold';
    }
}

$beverage = new Milk;