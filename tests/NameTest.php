<?php

namespace Gimei\Test;

use Gimei\Name;

class NameTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        srand(1);
    }

    public function testMaleReturnsMale()
    {
        $male = new Name('male');

        $this->assertInstanceOf('Gimei\Name', $male);
        $this->assertEquals('野村 敏彦', $male->kanji);
        $this->assertEquals('のむら としひこ', $male->hiragana);
        $this->assertEquals('ノムラ トシヒコ', $male->katakana);

        $this->assertInstanceOf('Gimei\Name\FirstName', $male->firstName);
        $this->assertEquals('敏彦', $male->firstName->kanji);
        $this->assertEquals('としひこ', $male->firstName->hiragana);
        $this->assertEquals('トシヒコ', $male->firstName->katakana);

        $this->assertInstanceOf('Gimei\Name\LastName', $male->lastName);
        $this->assertEquals('野村', $male->lastName->kanji);
        $this->assertEquals('のむら', $male->lastName->hiragana);
        $this->assertEquals('ノムラ', $male->lastName->katakana);
    }

    public function testFemaleReturnsFemale()
    {
        $female = new Name('female');

        $this->assertInstanceOf('Gimei\Name', $female);
        $this->assertEquals('杏琉', $female->firstName->kanji);
        $this->assertEquals('あんる', $female->firstName->hiragana);
        $this->assertEquals('アンル', $female->firstName->katakana);

        $this->assertInstanceOf('Gimei\Name\FirstName', $female->firstName);
        $this->assertEquals('野村', $female->lastName->kanji);
        $this->assertEquals('のむら', $female->lastName->hiragana);
        $this->assertEquals('ノムラ', $female->lastName->katakana);

        $this->assertInstanceOf('Gimei\Name\LastName', $female->lastName);
        $this->assertEquals('野村 杏琉', $female->kanji);
        $this->assertEquals('のむら あんる', $female->hiragana);
        $this->assertEquals('ノムラ アンル', $female->katakana);
    }
}
