<?php
declare(strict_types=0);

require_once __DIR__."/../FloatMath.php";

class FloatMathTest extends PHPUnit_Framework_TestCase
{
    public function testSum()
    {
        $this->assertEquals(3, FloatMath::sum(1,2));
    }

    /** @expectedException */
    public function testException()
    {
        $this->assertEquals(3, FloatMath::sum("1",2));
    }

}
