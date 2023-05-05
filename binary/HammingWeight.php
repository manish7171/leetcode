<?php
/**
 *
 * 
 * Write a function that takes the binary representation of an unsigned integer and returns the number of '1' bits it has (also known as the Hamming weight).
 *
 *
 *
 * */
class HammingWeight
{
    public static function solution(): int
    {
        $n = 00100101;
        $res = 0;
        while ($n) {
            $res += (($n & 1) == 1)?1:0; 
            $n = $n >> 1;
        }     
        return $res;
    }
}
