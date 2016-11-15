<?php

namespace Gimei\Test;

use Gimei\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        srand(1);
    }

    public function testMaleReturnsMale()
    {
        $male = new Person('male');
        $this->assertInternalType('string', $male->kanji);
        $this->assertEquals('野村 敏彦', $male->kanji);
        $this->assertEquals('のむら としひこ', $male->hiragana);
        $this->assertEquals('ノムラ トシヒコ', $male->katakana);
    }

    public function testFemaleReturnsFemale()
    {
        $female = new Person('female');
        $this->assertInternalType('string', $female->kanji);
        $this->assertEquals('野村 杏琉', $female->kanji);
        $this->assertEquals('のむら あんる', $female->hiragana);
        $this->assertEquals('ノムラ アンル', $female->katakana);
    }
}
