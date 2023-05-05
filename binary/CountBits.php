<?php

class CountBits
{
    public static function solution(): array
    {
        $n = 5;
        $dp = [];
        $dp[0] = 0;
        $offset = 1;
        for ($i = 1; $i <= $n; ++$i){
            if ($offset * 2 == $i) {
                $offset = $i; 
            } 
            $dp[$i] = 1 + $dp[$i - $offset];
        } 

        return $dp;
    }
}
