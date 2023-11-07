<?php

abstract class AchievementType
{
    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())).'.png';
    }

    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();
        return trim(preg_replace('/A-Z/', ' $0', $class));
    }

    abstract public function qualifier($user);
}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {

    }
}

class ReachTop50 extends AchievementType
{
    public function qualifier($user)
    {

    }
}
