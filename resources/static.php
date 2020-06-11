<?php

class Calculator
{
    public static $count = 0;
    public static $pi = 3.14;
    const PI = 3.14;

    public function __construct()
    {
        static::$count++;
    }

    public static function add($a, $b)
    {
        return $a + $b;
    }

    public static function subtract($a, $b)
    {
        return $a - $b;
    }
}

$calc = new Calculator();
$calc2 = new Calculator();
echo Calculator::add(2, 3);
echo Calculator::subtract(5, 2);
echo Calculator::$count;
echo Calculator::$pi;
echo Calculator::PI;