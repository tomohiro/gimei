<?php

namespace Gimei\Test;

use Gimei\Dictionary;

class DictionaryTest extends \PHPUnit_Framework_TestCase
{
    public function testDictionaryCreate()
    {
        $dictionary = Dictionary::create();
        $this->assertInstanceOf('Gimei\Dictionary', $dictionary);
    }
}
