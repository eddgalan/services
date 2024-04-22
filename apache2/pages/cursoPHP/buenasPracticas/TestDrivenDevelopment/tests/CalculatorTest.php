<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{

    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testSumTwoNumbers()
    {
        $number1 = mt_rand();
        $number2 = mt_rand();
        $this->assertEquals($number1 + $number2, $this->calculator->add($number1, $number2));
    }



}
