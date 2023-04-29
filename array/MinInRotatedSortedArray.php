<?php 
/*Suppose an array of length n sorted in ascending order is rotated between 1 and n times. For example, the array nums = [0,1,2,4,5,6,7] might become:

    [4,5,6,7,0,1,2] if it was rotated 4 times.
    [0,1,2,4,5,6,7] if it was rotated 7 times.

Notice that rotating an array [a[0], a[1], a[2], ..., a[n-1]] 1 time results in the array [a[n-1], a[0], a[1], a[2], ..., a[n-2]].

Given the sorted rotated array nums of unique elements, return the minimum element of this array.

You must write an algorithm that runs in O(log n) time. */
class MinInRotatedSortedArray 
{
    
    public static function solution(): int
    {
        $rArr = [4,5,6,7,0,1,2];
        $rArr = [1,2,4,5,6,7];
        $rArr = [5,6,7,1,2,4];
        $rArr = [2,1];
        $rArr = [4,5,1,2,3];
        $res = $rArr[0];
        $l = 0;
        $r = count($rArr) - 1;
        while ($l <= $r) {
            if ($rArr[$l] < $rArr[$r]) { //5 < 4 false
                $res = min($res, $rArr[$l]);
                break; 
            } 
            //$m = floor(($l + $r)/2); //$m = 5/2 = 2
            $m = ceil(($l + $r)/2); //$m = 5/2 = 2
            $res = min($res, $rArr[$m]);
            if ($rArr[$m] >= $rArr[$l]) { // 7 > 5 true
                $l = $m + 1; // $l = 2 + 1
            } else {
                $r = $m - 1;
            }
        }
        echo 'result '.$res.PHP_EOL;
        return 1;
    }
}
