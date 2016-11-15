<?php

namespace Gimei;

class Gender
{
    const MALE = 'male';
    const FEMALE = 'female';

    protected $gender = null;
    private $genders = [MALE, FEMALE];

    public function __construct(string $gender = null)
    {
        $this->gender = $gender ?: $this->genders[array_rand($this->genders)];
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
