<?php

namespace Gimei;

use Gimei\Name\FirstName;
use Gimei\Name\LastName;

class Name extends Base
{
    public $firstName;
    public $lastName;
    public $kanji;
    public $hiragana;
    public $katakana;
    private $gender;
    private $people;

    public function __construct($gender = null)
    {
        $people = Dictionary::create()->people;
        $gender = new Gender($gender);
        $firstName = $this->sampleFirstName($people->first_name->{$gender});
        $lastName = $this->sampleLastName($people->last_name);

        $this->gender = $gender;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->kanji = "{$lastName->kanji} {$firstName->kanji}";
        $this->hiragana = "{$lastName->hiragana} {$firstName->hiragana}";
        $this->katakana = "{$lastName->katakana} {$firstName->katakana}";
    }

    public function isMale()
    {
        return $this->gender->isMale();
    }

    public function isFemale()
    {
        return $this->gender->isFemale();
    }

    protected function sampleFirstName($firstNames)
    {
        $firstName = static::sample($firstNames);

        return new FirstName($firstName[0], $firstName[1], $firstName[2]);
    }

    protected function sampleLastName($lastNames)
    {
        $lastName = static::sample($lastNames);

        return new LastName($lastName[0], $lastName[1], $lastName[2]);
    }
}
