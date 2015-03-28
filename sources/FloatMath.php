<?php
declare(strict_types=1);


class FloatMath
{

    static function sum(float $a, float $b): float
    {
        return $a+$b;
    }

    static function increment(float $a): float
    {
        return $a + 1.0;
    }

    static function accAverage(float $average, float $newTerm): float
    {
        return self::sum($average, $newTerm) / 2;
    }

}