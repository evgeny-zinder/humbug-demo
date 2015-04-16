<?php

class CalculatorTest extends \PHPUnit_Framework_TestCase
{

    public function testMultiplication()
    {
        $calc = new Calculator();
        $result = $calc->mul(8,4);
        $this->assertEquals(32, $result);
    }

    public function testDivision()
    {
        $calc = new Calculator();
        $result = $calc->div(4,1);
        $this->assertEquals(4, $result);
    }
}