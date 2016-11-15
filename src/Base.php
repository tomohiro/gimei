<?php

namespace Gimei;

class Base
{
    protected function sample(array $array)
    {
        return $array[array_rand($array)];
    }
}
