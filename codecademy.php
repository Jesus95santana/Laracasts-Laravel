<?php

class Beverage
{
    public $opacity;
    private $temperature, $color;

    function __construct($temperature, $color)
    {
        $this->temperature = $temperature;
        $this->color = $color;
    }

    function getInfo()
    {
        return "This beverage is $this->temperature and $this->color.";
    }
}

class Milk extends Beverage
{
    function setOpacity($opacity)
    {
        $this->opacity = $opacity;
    }
}
