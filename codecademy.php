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
    function __construct()
    {
        $this->temperature = "cold";
    }

    public function getInfo()
    {
        return "This beverage is {$this->temperature}. I like my milk this way.";
    }

}

$milk = new Milk();
echo $milk->getInfo();