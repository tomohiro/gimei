<?php

namespace Gimei;

use Gimei\Address\City;
use Gimei\Address\Prefecture;
use Gimei\Address\Town;

class Address extends Base
{
    public $prefecture;
    public $city;
    public $town;
    public $kanji;
    public $hiragana;
    public $katakana;

    public function __construct($gender = null)
    {
        $addresses = Dictionary::create()->addresses;
        $prefecture = $this->samplePrefecture($addresses->prefecture);
        $city = $this->sampleCity($addresses->city);
        $town = $this->sampleTown($addresses->town);

        $this->prefecture = $prefecture;
        $this->city = $city;
        $this->town = $town;
        $this->kanji = "{$prefecture->kanji}{$city->kanji}{$town->kanji}";
        $this->hiragana = "{$prefecture->hiragana}{$city->hiragana}{$town->hiragana}";
        $this->katakana = "{$prefecture->katakana}{$city->katakana}{$town->katakana}";
    }

    protected function samplePrefecture($prefectures)
    {
        $prefecture = static::sample($prefectures);

        return new Prefecture($prefecture[0], $prefecture[1], $prefecture[2]);
    }

    protected function sampleCity($cities)
    {
        $city = static::sample($cities);

        return new City($city[0], $city[1], $city[2]);
    }

    protected function sampleTown($towns)
    {
        $town = static::sample($towns);

        return new Town($town[0], $town[1], $town[2]);
    }
}
