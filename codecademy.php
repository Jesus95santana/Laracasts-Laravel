<?php

class Beverage
{
    public $temperature, $color, $opacity;

    public function __construct($temperature, $color)
    {
        $this->temperature = $temperature;
        $this->color = $color;
    }

    function getInfo()
    {
        return "This beverage is $this->temperature and $this->color.";
    }
}

$beverage = new Beverage('cold', 'black');
echo $beverage->getInfo();