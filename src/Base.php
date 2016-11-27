<?php

namespace Gimei;

class Base
{
    public static function sample(array $array)
    {
        $size = count($array);
        if ($size === 0) {
            return;
        }

        $min = 0;
        $max = $size - 1;
        $key = mt_rand($min, $max);

        return $array[$key];
    }
}
