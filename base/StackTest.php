<?php
class StackTest extends PHPUnit_Framework_TestCase
{
    public function testPushAndPop()
    {
        $stack = array();
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals(1, count($stack));
    }

    /**
    * @test
    */
    public function equal()
    {
        $this->assertEquals(2, 1 + 1);
    }
}
