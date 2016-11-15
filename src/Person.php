<?php

namespace Gimei;

class Person extends Base
{
    public $firstName = null;
    public $lastName  = null;
    public $kanji     = null;
    public $hiragana  = null;
    public $katakana  = null;
    private $gender = null;
    private $people = null;

    public function __construct(string $gender = null)
    {
        $this->people    = Dictionary::create()->people;
        $this->gender    = new Gender($gender);
        $this->firstName = $this->sampleFirstName();
        $this->lastName  = $this->sampleLastName();
        $this->kanji     = "{$this->lastName->kanji} {$this->firstName->kanji}";
        $this->hiragana  = "{$this->lastName->hiragana} {$this->firstName->hiragana}";
        $this->katakana  = "{$this->lastName->katakana} {$this->firstName->katakana}";
    }

    protected function sampleFirstName()
    {
        $gender = strtolower((string) $this->gender);
        $names = $this->sample($this->people->first_name->{$gender});
        return new Name($names[0], $names[1], $names[2]);
    }

    protected function sampleLastName()
    {
        $names = $this->sample($this->people->last_name);
        return new Name($names[0], $names[1], $names[2]);
    }
}
