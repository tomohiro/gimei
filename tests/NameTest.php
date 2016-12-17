<?php

namespace Gimei\Test;

use Gimei\Name;

class NameTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        mt_srand(1);
    }

    public function testMaleReturnsMale()
    {
        $male = new Name('male');

        $this->assertInstanceOf('Gimei\Name', $male);
        $this->assertTrue($male->isMale());
        $this->assertFalse($male->isFemale());

        $this->assertEquals('鈴木 規彰', $male->kanji);
        $this->assertEquals('すずき のりあき', $male->hiragana);
        $this->assertEquals('スズキ ノリアキ', $male->katakana);

        $this->assertInstanceOf('Gimei\Name\FirstName', $male->firstName);
        $this->assertEquals('規彰', $male->firstName->kanji);
        $this->assertEquals('のりあき', $male->firstName->hiragana);
        $this->assertEquals('ノリアキ', $male->firstName->katakana);

        $this->assertInstanceOf('Gimei\Name\LastName', $male->lastName);
        $this->assertEquals('鈴木', $male->lastName->kanji);
        $this->assertEquals('すずき', $male->lastName->hiragana);
        $this->assertEquals('スズキ', $male->lastName->katakana);
    }

    public function testFemaleReturnsFemale()
    {
        $female = new Name('female');

        $this->assertInstanceOf('Gimei\Name', $female);
        $this->assertTrue($female->isFemale());
        $this->assertFalse($female->isMale());

        $this->assertEquals('鈴木 広佳', $female->kanji);
        $this->assertEquals('すずき ひろか', $female->hiragana);
        $this->assertEquals('スズキ ヒロカ', $female->katakana);

        $this->assertInstanceOf('Gimei\Name\FirstName', $female->firstName);
        $this->assertEquals('広佳', $female->firstName->kanji);
        $this->assertEquals('ひろか', $female->firstName->hiragana);
        $this->assertEquals('ヒロカ', $female->firstName->katakana);

        $this->assertInstanceOf('Gimei\Name\LastName', $female->lastName);
        $this->assertEquals('鈴木', $female->lastName->kanji);
        $this->assertEquals('すずき', $female->lastName->hiragana);
        $this->assertEquals('スズキ', $female->lastName->katakana);
    }
}
