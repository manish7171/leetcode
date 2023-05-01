<?php
/**
 * Given an integer array nums, return all the triplets [nums[i], nums[j], nums[k]] such that i != j, i != k, and j != k, and nums[i] + nums[j] + nums[k] == 0.
 * Notice that the solution set must not contain duplicate triplets.
 *
 *
 *
 * */
class ThreeSum
{
    public static function solution(): array
    {
        $res = [];
        $nums = [-1,0,1,2,-1,-4];
        sort($nums);//[-4, -1, -1, 0, 1, 2] 

        for ($i = 0; $i < count($nums); $i++) {
            if (($i > 0) && ($nums[$i] == $nums[$i-1])) {
                continue;                
            }            

            $l = $i + 1;
            $r = count($nums) - 1;
            
            while ($l < $r) {
                $threeSum = $nums[$i] + $nums[$l] + $nums[$r];
                if ($threeSum > 0) {
                    $r = $r - 1; 
                } elseif ($threeSum < 0) {
                    $l = $l + 1;
                } else {
                    $res[] = [$nums[$i], $nums[$l], $nums[$r]];
                    $l = $l + 1;
                    while ($nums[$l] == $nums[$l-1] && $l < $r) {
                        $l = $l + 1;
                    }
                }
            }
            
        }

        return $res;
    }

}
