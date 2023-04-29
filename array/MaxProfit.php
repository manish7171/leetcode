<?phP
/**
 *
 *You are given an array prices where prices[i] is the price of a given stock on the ith day.

You want to maximize your profit by choosing a single day to buy one stock and choosing a different day in the future to sell that stock.

Return the maximum profit you can achieve from this transaction. If you cannot achieve any profit, return 0.

 

Example 1:

Input: prices = [7,1,5,3,6,4]
Output: 5
Explanation: Buy on day 2 (price = 1) and sell on day 5 (price = 6), profit = 6-1 = 5.
Note that buying on day 2 and selling on day 1 is not allowed because you must buy before you sell.

Example 2:

Input: prices = [7,6,4,3,1]
Output: 0
Explanation: In this case, no transactions are done and the max profit = 0.

 *
 * solution
 * find local min and search for local max, sliding window;
 * ***/
class MaxProfit 
{
    public static function solution(): int
    {
        $prices = [7,1,5,3,6,4];
        $prices = [7,6,4,3,1];
        $leftPointer = 0 ;
        $rightPointer = 1;
        $maxProfit = 0;
        while ($rightPointer < count($prices)) {
            if($prices[$rightPointer] >= $prices[$leftPointer]) {
                $profit = $prices[$rightPointer] - $prices[$leftPointer]; 
                $maxProfit = max($maxProfit, $profit);
            } else {
                $leftPointer = $rightPointer; 
            }
            
            $rightPointer++;
        }
        return $maxProfit;
    }

    public function again(): int
    {
        $prices = [7,1,5,3,6,4];
        $leftPointer = 0;
        $rightPointer = 1;
        $maxProfit = 0;

        while ($rightPointer < count($prices)) {
            if ($prices[$rightPointer] >= $prices[$leftPointer]) {
                $profit = $prices[$rightPointerp] - $prices[$leftPointer]; 
                $maxProfit = max($maxProfit, $profit);
            } else {
                $rightPointer++;
            } 
        }
        return $maxProfit;
    }
}

