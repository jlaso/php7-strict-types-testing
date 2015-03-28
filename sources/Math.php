<?php
declare(strict_types = 1);

class Math
{
    public static function factorial(int $number): int
    {
        if ($number < 0){
          throw new Exception('factorial expects a positive number');
        }
        if (1 >= $number) {
            return 1;
        }

        return self::factorial($number - 1) * $number;
    }
}
