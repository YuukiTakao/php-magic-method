<?php

declare(strict_types=1);

namespace App;

class MagicMethod
{
    public $result;

    public function __get($property)
    {
        return 'call __get method.';
    }

    public function __set($property, $value)
    {
        $this->result = 'call __set method.';
    }

    public function __call($method, $arguments)
    {
        return 'call __call method.';
    }

    public static function __callStatic($method, $arguments)
    {
        return 'call __callStatic method.';
    }

    public function __invoke()
    {
        return 'call __invoke method.';
    }

    public function __isset($property)
    {
        $this->result = 'call __isset method.';
    }
}
