<?php

namespace Gimei;

class Address extends Base
{
    public $prefecture;
    public $city;
    public $town;
    public $kanji;
    public $hiragana;
    public $katakana;

    public function __construct(string $gender = null)
    {
        $addresses  = Dictionary::create()->addresses;
        $prefecture = $this->samplePrefecture($addresses->prefecture);
        $city       = $this->sampleCity($addresses->city);
        $town       = $this->sampleTown($addresses->town);

        $this->prefecture = $prefecture;
        $this->city       = $city;
        $this->town       = $town;
        $this->kanji      = "{$prefecture->kanji}{$city->kanji}{$town->kanji}";
        $this->hiragana   = "{$prefecture->hiragana}{$city->hiragana}{$town->hiragana}";
        $this->katakana   = "{$prefecture->katakana}{$city->katakana}{$town->katakana}";
    }

    protected function samplePrefecture($prefectures)
    {
        $prefecture = $this->sample($prefectures);
        return new Name($prefecture[0], $prefecture[1], $prefecture[2]);
    }

    protected function sampleCity($cities)
    {
        $city = $this->sample($cities);
        return new Name($city[0], $city[1], $city[2]);
    }

    protected function sampleTown($towns)
    {
        $town = $this->sample($towns);
        return new Name($town[0], $town[1], $town[2]);
    }
}
