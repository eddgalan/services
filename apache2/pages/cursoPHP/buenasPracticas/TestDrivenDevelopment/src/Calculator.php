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
}
