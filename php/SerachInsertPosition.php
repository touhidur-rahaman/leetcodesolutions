<?php
class SerachInsertPosition {

    /**
     * problem url: https://leetcode.com/problems/search-insert-position/description/
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $left = 0;
        $right = count($nums) - 1;

        while ($left <= $right) {
            $mid = intdiv($left + $right, 2);

            if ($nums[$mid] == $target) {
                return $mid;
            } elseif ($nums[$mid] < $target) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }

        return $left;
    }
}

$si = new SerachInsertPosition();
$nums = [1,3,5,6];
$target = 5;

print_r($si->searchInsert($nums,$target));
print_r("\n");