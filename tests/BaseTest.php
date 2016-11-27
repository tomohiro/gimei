<?php
namespace Gimei\Test;

use Gimei\Base;

class BaseTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        mt_srand(1);
    }

    public function testSampleReturnsOneRandomItemFromArray()
    {
        $base = new Base;
        $list = ['foo', 'bar', 'baz'];
        $this->assertEquals('bar', Base::sample($list));
    }
}
