<?php

class AchievementType
{
    public function name()
    {

    }

    public function difficulty()
    {

    }

    public function icon()
    {

    }
}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {

    }

    public function name()
    {
        return 'I overide';
    }
}