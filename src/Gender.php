<?php

namespace Gimei;

class Gender
{
    const MALE = 'male';
    const FEMALE = 'female';

    protected $gender = null;

    public function __construct($gender = null)
    {
        $genders = [self::MALE, self::FEMALE];
        $this->gender = $gender ?: $genders[array_rand($genders)];
    }

    public static function random()
    {
        return new self;
    }

    public static function male()
    {
        return new self(self::MALE);
    }

    public static function female()
    {
        return new self(self::FEMALE);
    }

    public function isMale()
    {
        return $this->gender === self::MALE;
    }

    public function isFemale()
    {
        return $this->gender === self::FEMALE;
    }

    public function __toString()
    {
        return $this->gender;
    }
}
