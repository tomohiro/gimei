<?php

namespace Gimei;

class Gimei
{
    public static function name()
    {
        return new Name();
    }

    public static function male()
    {
        return new Name('male');
    }

    public static function female()
    {
        return new Name('female');
    }

    public static function address()
    {
        return new Address();
    }
}
