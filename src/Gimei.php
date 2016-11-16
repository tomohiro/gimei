<?php

namespace Gimei;

class Gimei
{
    public static function name(string $gender = null)
    {
        return new Name($gender);
    }

    public static function address()
    {
        return new Address;
    }
}
