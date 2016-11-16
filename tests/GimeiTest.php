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
        $this->assertTrue($maleName->gender->isMale());
    }

    public function testGenerateFemaleName()
    {
        $femaleName = Gimei::female();
        $this->assertInstanceOf('Gimei\Name', $femaleName);
        $this->assertTrue($femaleName->gender->isFemale());
    }

    public function testGenerateAddress()
    {
        $address = Gimei::address();
        $this->assertInstanceOf('Gimei\Address', $address);
    }
}
