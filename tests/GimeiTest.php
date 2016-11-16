<?php

namespace Gimei\Test;

use Gimei\Gimei;

class GimeiTest extends \PHPUnit_Framework_TestCase
{
    public function testGeneratePerson()
    {
        $person = Gimei::person();
        $this->assertInstanceOf('Gimei\Person', $person);
    }

    public function testGenerateAddress()
    {
        $address = Gimei::address();
        $this->assertInstanceOf('Gimei\Address', $address);
    }
}
