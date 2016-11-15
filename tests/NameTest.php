<?php

namespace Gimei;

use Gimei\Name;

class NameTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateName()
    {
        $name = new Name('漢字', 'ひらがな', 'カタカナ');
        $this->assertInstanceOf('Gimei\Name', $name);
        $this->assertEquals('漢字', $name->kanji);
        $this->assertEquals('ひらがな', $name->hiragana);
        $this->assertEquals('カタカナ', $name->katakana);
    }
}
