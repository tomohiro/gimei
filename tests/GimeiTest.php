<?php

namespace Gimei\Test;

use Gimei\Gimei;

class GimeiTest extends \PHPUnit_Framework_TestCase
{
    public function testGenerateName()
    {
        $name = Gimei::name();
        $this->assertInstanceOf('Gimei\Name', $name);
    }

    public function testGenerateAddress()
    {
        $address = Gimei::address();
        $this->assertInstanceOf('Gimei\Address', $address);
    }
}
