<?php

namespace App;

class Calculator
{
    /**
     * Returns the sum of two numbers
     * 
     * @param int $number1
     * @param int $number2
     * @return int
     */
    public function add(int $number1, int $number2) : int
    {
        return $number1 + $number2;
    }

    /**
     * Return the susbtraction of two numbers
     * 
     * @param int $number1
     * @param int $number2
     * @return int
     */
    public function substraction(int $number1, int $number2) : int
    {
        return $number1 - $number2;
    }

    /**
     * Return the product of two numbers
     * 
     * @param int $number1
     * @param int $number2
     * @return int
     */
    public function multiplication(int $number1, int $number2) : int
    {
        return $number1 * $number2;
    }

    /**
     * Return the quotient of a division
     * 
     * If the divisor is zero, returns 0
     * 
     * @param int $number1
     * @param int $number2
     * @return int
     */
    public function division(int $dividend, int $divisor) : int
    {
        if ($divisor === 0) {
            return 0;
        }
        return $dividend / $divisor;
    }

}
