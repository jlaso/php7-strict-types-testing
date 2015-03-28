<?php
declare(strict_types=1);

require_once __DIR__."/../Math.php";

class MathTest extends PHPUnit_Framework_TestCase
{
    public function testFactorial()
    {
        $this->assertEquals(5*4*3*2, Math::factorial(5));

        $this->assertEquals(Math::factorial(8)*9, Math::factorial(9));
    }

}
