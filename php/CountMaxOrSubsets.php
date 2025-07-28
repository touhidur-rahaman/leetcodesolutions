<?php
class CountMaxOrSubsets {

    /**
     * problem url= https://leetcode.com/problems/count-number-of-maximum-bitwise-or-subsets/
     * @param int[] $nums
     * @return Integer
     */
    function countMaxOrSubsets($nums) {
        $maxOr = 0;
        $count = 0;

        foreach ($nums as $num) {
            $maxOr |= $num;
        }

        $n = count($nums);

        $dfs = function($index, $currentOr) use (&$dfs, $nums, $maxOr, &$count, $n) {
            if ($index === $n) {
                if ($currentOr === $maxOr) {
                    $count++;
                }
                return;
            }

            $dfs($index + 1, $currentOr | $nums[$index]);

            $dfs($index + 1, $currentOr);
        };

        $dfs(0, 0);

        return $count;
    }
}

$countmax = new CountMaxOrSubsets();
$numsarr=[3,1];
print_r($countmax->countMaxOrSubsets($numsarr));