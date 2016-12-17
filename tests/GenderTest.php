<?php

namespace Gimei\Test;

use Gimei\Gender;

class GenderTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateGenderWithMaleReturnsMale()
    {
        $gender = new Gender('male');
        $this->assertInstanceOf('Gimei\Gender', $gender);
        $this->assertTrue($gender->isMale());
    }

    public function testCreateMaleReturnsMale()
    {
        $gender = Gender::male();
        $this->assertInstanceOf('Gimei\Gender', $gender);
        $this->assertTrue($gender->isMale());
    }

    public function testCreateGenderWithFemaleReturnsFemale()
    {
        $gender = new Gender('female');
        $this->assertInstanceOf('Gimei\Gender', $gender);
        $this->assertTrue($gender->isFemale());
    }

    public function testCreateFemaleReturnsFemale()
    {
        $gender = Gender::female();
        $this->assertInstanceOf('Gimei\Gender', $gender);
        $this->assertTrue($gender->isFemale());
    }

    public function testRandomReturnsRandomSelectedGender()
    {
        $gender = Gender::random();
        $this->assertInstanceOf('Gimei\Gender', $gender);
    }

    public function testCastToString()
    {
        $gender = Gender::random();
        $this->assertInternalType('string', (string) $gender);
    }
}
