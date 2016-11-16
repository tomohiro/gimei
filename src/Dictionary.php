<?php

namespace Gimei;

class Dictionary
{
    public $people;
    public $addresses;

    final public static function create()
    {
        static $instance = null;
        return $instance ?: $instance = new self;
    }

    final private function __construct()
    {
        $peopleJsonPath = __DIR__ . '/data/people.json';
        $this->people   = json_decode(file_get_contents($peopleJsonPath));

        $addressesJsonPath = __DIR__ . '/data/addresses.json';
        $this->addresses   = json_decode(file_get_contents($addressesJsonPath));
    }

    final private function __clone()
    {
    }
}
