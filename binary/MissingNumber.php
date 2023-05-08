<?php

class MissingNumber
{
    /**
 *  @return int
 *
 * **/
    public static function solution (): int
    {
        $nums = [3,0,1]; 
        $res = count($nums);

        for ($i = 0; $i < count($nums); ++$i)
        {
            $res += ($i - $nums[$i]); 
        }
        return $res;
    }
}
