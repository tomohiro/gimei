<?php

namespace Gimei\Test;

use Gimei\Address;

class AddressTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        srand(1);
    }

    public function testAddressReturnsAddress()
    {
        $address = new Address;

        $this->assertInstanceOf('Gimei\Address', $address);
        $this->assertEquals('岐阜県河内長野市西軽部', $address->kanji);
        $this->assertEquals('ぎふけんかわちながのしにしかるべ', $address->hiragana);
        $this->assertEquals('ギフケンカワチナガノシニシカルベ', $address->katakana);

        $this->assertInstanceOf('Gimei\Address\Prefecture', $address->prefecture);
        $this->assertEquals('岐阜県', $address->prefecture->kanji);
        $this->assertEquals('ぎふけん', $address->prefecture->hiragana);
        $this->assertEquals('ギフケン', $address->prefecture->katakana);

        $this->assertInstanceOf('Gimei\Address\City', $address->city);
        $this->assertEquals('河内長野市', $address->city->kanji);
        $this->assertEquals('かわちながのし', $address->city->hiragana);
        $this->assertEquals('カワチナガノシ', $address->city->katakana);

        $this->assertInstanceOf('Gimei\Address\Town', $address->town);
        $this->assertEquals('西軽部', $address->town->kanji);
        $this->assertEquals('にしかるべ', $address->town->hiragana);
        $this->assertEquals('ニシカルベ', $address->town->katakana);
    }
}

