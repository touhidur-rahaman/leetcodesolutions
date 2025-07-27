<?php
class CountHill {

    /**
     * problem url = https://leetcode.com/problems/count-hills-and-valleys-in-an-array/
     * @param Integer[] $nums
     * @return Integer
     */
    function countHillValley($nums) {
        $hillVallyCount = 0;

        $prev = null;
        foreach ($nums as $num) {
            if ($num !== $prev) {
                $filtered[] = $num;
                $prev = $num;
            }
        }

        if(count($filtered)<=2) return 0;
        
        for($i = 1; $i<count($filtered)-1; $i++){
            if(( ($filtered[$i]>$filtered[$i-1]) && ($filtered[$i]>$filtered[$i+1]) ) || ( ($filtered[$i]<$filtered[$i-1]) && ($filtered[$i]<$filtered[$i+1]) )){
                $hillVallyCount++;
            }
        }

        return $hillVallyCount;
    }
}

$countHill = new CountHill();
$nums = [2,2,2,4,1,1,1,6,6,5,5,5,5,5,5];
print_r($countHill->countHillValley($nums));