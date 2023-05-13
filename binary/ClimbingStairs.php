<?php

class ClimbingStairs
{
    public static function solution(): int
    {
        $n = 3; 
        $one = 1;
        $two = 1;
        for ($i = 0; $i < $n-1; ++$i) {
            $temp = $one;
            $one = $one + $two;
            $two = $temp;
        }
        return $one;
    }
}
