<?php
/** Sum of Two Number without using + - operator **/
class ReverseBit
{
    // 100 bitshift right by 1  010 & 1 010
    public static function solution(): int
    {
        $res = 0;
        $n = 4;
        $count = 0;
        while($count < 32) {
            $bit = ($n >> $count) & 1;
            $res = $res | ($bit << (31 - $count)); 
            $count++;
        }
        return $res;
    }
}
