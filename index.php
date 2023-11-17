<?php

class Age
{
    private $age;

    /**
     * @param $age
     */
    public function __construct($age)
    {
        if ($age <= 0 || $age >= 120) {
            throw new \http\Exception\InvalidArgumentException('That makes no sense');
        }

        $this->age = $age;
    }

    public function increment()
    {
        return new self($this->age + 1);
    }

    public function get()
    {
        return $this->age;
    }
}

$age = new Age(35);
$age = $age->increment();
var_dump($age->get());