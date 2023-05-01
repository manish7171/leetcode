<?php
/** Sum of Two Number without using + - operator **/
class SumOfTwo
{
    public static function solution(): int
    {
        $a = 1;
        $b = 2;
        while ($b != 0) {
            $tmp = ($a & $b)<<1;
            $a = ($a ^ $b);
            $b = $tmp; 
        }
        return $a;
    }
}
