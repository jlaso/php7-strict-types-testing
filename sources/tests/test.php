<?php

require_once __DIR__."/../sum.php";

class StackTest extends PHPUnit_Framework_TestCase
{
    public function testSum()
    {
        $this->assertEquals(3, sum(1,2));
    }

    /** @expectedException */
    public function testException()
    {
        $this->assertEquals(3, sum("1",2));
    }

}
