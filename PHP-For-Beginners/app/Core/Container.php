<?php

namespace Core;

use Exception;

class Container
{
    protected $bindings = [];

    public function bind($key, $func)
    {
        $this->bindings[$key] = $func;
    }

    public function resolve($key)
    {
        if (!array_key_exists($key, $this->bindings)) {
            throw new Exception("No Binding {$key}");
        }

        $resolver = $this->bindings[$key];

        return call_user_func($resolver);

    }
}