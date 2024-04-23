<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    const NUMBER1 = 10;
    const NUMBER2 = 5;

    /** @var Calculator */
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testSumTwoNumbers()
    {
        $this->assertEquals(self::NUMBER1 + self::NUMBER2, $this->calculator->add(self::NUMBER1, self::NUMBER2));
    }

    public function testSubstraction()
    {
        $this->assertEquals(self::NUMBER1 - self::NUMBER2, $this->calculator->substraction(self::NUMBER1, self::NUMBER2));
    }

    public function testMultiplyTwoNumbers()
    {
        $this->assertEquals(self::NUMBER1 * self::NUMBER2, $this->calculator->multiplication(self::NUMBER1, self::NUMBER2));
    }

    public function testDivision()
    {
        $this->assertEquals(self::NUMBER1 / self::NUMBER2, $this->calculator->division(self::NUMBER1, self::NUMBER2));
    }

    /*
    public function testDivisionWhenDenominatorIsZero()
    {
        $this->expectException(DivisionByZeroError::class);
        $this->calculator->division(10, 0);
    }
    */

    public function testDivisionWhenDenominatorIsZero()
    {
        $this->assertEquals(0, $this->calculator->division(self::NUMBER1, 0));
    }

}
