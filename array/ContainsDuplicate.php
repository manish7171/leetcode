<?php
/***
 *Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct.

 

Example 1:

Input: nums = [1,2,3,1]
Output: true

Example 2:

Input: nums = [1,2,3,4]
Output: false

Example 3:

Input: nums = [1,1,1,3,3,4,3,2,4,2]
Output: true

 *
 *
 *
 *
 *
 * Solution
 * hashset to get unique values in array, to check for duplicates easily
 *
 * **/
class ContainsDuplicate 
{
    
    public static function solution()
    {
        //$nums = [1,2,3,1];
        $nums = [1,2,3,4];
        $hash = [];
        for ($i = 0; $i < count($nums); ++$i) {
            if (isset($hash[$nums[$i]])){
                return 1;
            } else {
                $hash[$nums[$i]] = $i;
            } 
            return 0;
        }
    }
}
