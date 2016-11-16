<?php

namespace Gimei;

class Gimei
{
    public static function person(string $gender = null)
    {
        return new Person($gender);
    }

    public static function address()
    {
        return new Address;
    }
}
