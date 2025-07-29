<?php
class SmallestSubarraysBitor {

    /**
     * problem url = https://leetcode.com/problems/smallest-subarrays-with-maximum-bitwise-or/
     * @param int[] $nums
     * @return Integer[]
     */
    function smallestSubarrays($nums) {
        $n = count($nums);
        $res = array_fill(0, $n, 1);
        $last = array_fill(0, 32, -1);       

        for ($i = $n - 1; $i >= 0; $i--) {
            for ($b = 0; $b < 32; $b++) {
                if (($nums[$i] >> $b) & 1) {
                    $last[$b] = $i;
                }
            }
            
            $maxLast = $i;
            foreach ($last as $bitIndex => $idx) {
                if ($idx != -1) {
                    $maxLast = max($maxLast, $idx);
                }
            }
            
            $res[$i] = $maxLast - $i + 1;
        }

        return $res;
    }
}

$smallsub = new SmallestSubarraysBitor();
$numsarr=[1,0,2,1,3];
print_r($smallsub->smallestSubarrays($numsarr));