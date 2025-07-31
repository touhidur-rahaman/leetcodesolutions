<?php
class BitwiseOrSubarray {

    /**
     * problem url: https://leetcode.com/problems/bitwise-ors-of-subarrays/
     * This function calculates the number of distinct bitwise OR results from all possible subarrays.
     * @param int[] $arr
     * @return int
     */
    function subarrayBitwiseORs($arr) {
        $res = [];
        $cur = [];

        foreach ($arr as $num) {
            $newCur = [$num => true];

            foreach ($cur as $key => $_) {
                $newCur[$key | $num] = true;
            }

            $cur = $newCur;
            foreach ($cur as $key => $_) {
                $res[$key] = true;
            }
        }
        print_r($res);
        print_r($cur);
        return count($res);
    }
}

$bitwiseOrSubarray = new BitwiseOrSubarray();
$arr = [1, 2, 4];
echo $bitwiseOrSubarray->subarrayBitwiseORs($arr);