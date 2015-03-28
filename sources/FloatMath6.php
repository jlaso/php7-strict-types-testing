<?php

class FloatMath6
{

    static function sum($a, $b)
    {
        return $a+$b;
    }

    static function increment($a)
    {
        return $a + 1.0;
    }

    static function accAverage($average, $newTerm)
    {
        return self::sum($average, $newTerm) / 2;
    }

}