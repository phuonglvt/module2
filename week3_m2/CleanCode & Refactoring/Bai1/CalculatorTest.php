<?php

require "Calculator.php";

class CalculatorTest extends Calculator
{
    public function testCalculateAdd()
    {
        $firstOperand = 1;
        $secondOperand = 1;
        $operator = '+';

        $expected = 2;

        $calculator = new Calculator();
        $result = $calculator->calculate($firstOperand, $secondOperand, $operator);
        echo $result;
        echo $expected;
    }



}