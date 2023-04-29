<?php 

/****
 *
 * Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

 * You may assume that each input would have exactly one solution, and you may not use the same element twice.

 * You can return the answer in any order.
 *
 *
  Example 1: Input: nums = [2,7,11,15], target = 9
     Output: [0,1]
     Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].

     Example 2:

     Input: nums = [3,2,4], target = 6
     Output: [1,2]

     Example 3:

     Input: nums = [3,3], target = 6
     Output: [0,1]


     // solution
     // use hash map to instantly check for difference value, map will add index of last occurrence of a num, dont use same element twice;
     // use hash map to save the visited element
     // for next iteration check if (taget - current number) is already is our hash map. For example we alredy have 2 in our hash map
     // and if next element is 7 then the different with target will be 2, which is already in our hash map.

 * ***/
class TwoSum
{
    public static function solution()
    {
        $nums = [8,11,7,2];
        //$nums = [3,2,4];
        //$nums = [3,3];
        $target = 9;
        //$target = 6;
        $hash = [];
        for ($i = 0; $i < count($nums); ++$i) {
            $diff = $target - $nums[$i];
            if (isset($hash[$diff])) {
                return [$hash[$diff], $i];
            } else {
                $hash[$nums[$i]] = $i; 
            }
        }
        return [];
    }
}
