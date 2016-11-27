<?php

namespace Gimei\Test;

use Gimei\Address;

class AddressTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        mt_srand(1);
    }

    public function testAddressReturnsAddress()
    {
        $address = new Address;

        $this->assertInstanceOf('Gimei\Address', $address);
        $this->assertEquals('兵庫県室蘭市仁川高台', $address->kanji);
        $this->assertEquals('ひょうごけんむろらんしにがわたかだい', $address->hiragana);
        $this->assertEquals('ヒョウゴケンムロランシニガワタカダイ', $address->katakana);

        $this->assertInstanceOf('Gimei\Address\Prefecture', $address->prefecture);
        $this->assertEquals('兵庫県', $address->prefecture->kanji);
        $this->assertEquals('ひょうごけん', $address->prefecture->hiragana);
        $this->assertEquals('ヒョウゴケン', $address->prefecture->katakana);

        $this->assertInstanceOf('Gimei\Address\City', $address->city);
        $this->assertEquals('室蘭市', $address->city->kanji);
        $this->assertEquals('むろらんし', $address->city->hiragana);
        $this->assertEquals('ムロランシ', $address->city->katakana);

        $this->assertInstanceOf('Gimei\Address\Town', $address->town);
        $this->assertEquals('仁川高台', $address->town->kanji);
        $this->assertEquals('にがわたかだい', $address->town->hiragana);
        $this->assertEquals('ニガワタカダイ', $address->town->katakana);
    }
}

