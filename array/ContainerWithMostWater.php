<?php
/***
 *
 * You are given an integer array height of length n. There are n vertical lines drawn such that the two endpoints of the ith line are (i, 0) and (i, height[i]).

 * Find two lines that together with the x-axis form a container, such that the container contains the most water.

 * Return the maximum amount of water a container can store.
 *
 *
 *
 *
 * **/
class ContainerWithMostWater
{

    public static function solution(): int
    {
        $height = [1,8,6,2,5,4,8,3,7];
        $l = 0;
        $r = count($height) - 1;
        $res = 0;
        
        while ($l < $r) {
            $area = ($r - $l) * min($height[$l], $height[$r]);
            $res = max($res, $area);
            if ($height[$l] < $height[$r]) {
                $l = $l + 1;
            } else {
                $r = $r - 1; 
            }
        }
        return $res;
    }

}
