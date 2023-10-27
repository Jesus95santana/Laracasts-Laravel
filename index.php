<?php

class Team
{
    protected $name;
    protected $members = [];

    # 'CMD + N' Generate Constructor shortcut (Mac)
    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start($name, $members = [])
    {
        return new static($name, $members);
    }

    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function add($name)
    {
        $this->members[] = $name;
    }

    public function cancel()
    {

    }
}

$acme = Team::start('Acme',
    ['John Doe', 'Johnny Sims']);


var_dump($acme);