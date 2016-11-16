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

    public function testGenerateMaleName()
    {
        $maleName = Gimei::male();

        $this->assertInstanceOf('Gimei\Name', $maleName);
        $this->assertTrue($maleName->isMale());
        $this->assertFalse($maleName->isFemale());
    }

    public function testGenerateFemaleName()
    {
        $femaleName = Gimei::female();

        $this->assertInstanceOf('Gimei\Name', $femaleName);
        $this->assertTrue($femaleName->isFemale());
        $this->assertFalse($femaleName->isMale());
    }

    public function testGenerateAddress()
    {
        $address = Gimei::address();

        $this->assertInstanceOf('Gimei\Address', $address);
    }
}
