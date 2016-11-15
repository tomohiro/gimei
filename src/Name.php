<?php

namespace Gimei;

class Name
{
    public $kanji;
    public $hiragana;
    public $katakana;

    public function __construct($kanji, $hiragana, $katakana)
    {
        $this->kanji    = $kanji;
        $this->hiragana = $hiragana;
        $this->katakana = $katakana;
    }
}
