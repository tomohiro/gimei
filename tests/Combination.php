<?php

namespace Gimei;

class Combination extends \PHPUnit_Framework_TestCase
{
    public function testCreateName()
    {
        $name = new Combination('漢字', 'ひらがな', 'カタカナ');
        $this->assertInstanceOf('Gimei\Name', $name);
        $this->assertEquals('漢字', $name->kanji);
        $this->assertEquals('ひらがな', $name->hiragana);
        $this->assertEquals('カタカナ', $name->katakana);
    }
}
