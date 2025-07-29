<?php
class RemoveElement {

    /**
     * problem url= https://leetcode.com/problems/remove-element/
     * @param int[] $nums
     * @param int $val
     * @return int
     */
    function removeElement(&$nums, $val) {
        $nums = array_filter($nums, fn($item) => $item !== $val);
        return count($nums);
    }
}

$remove = new RemoveElement();
$numsarr=[1,0,2,1,3];
print_r($remove->removeElement($numsarr, 1));