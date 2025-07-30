<?php
/**
 * problem url: https://leetcode.com/problems/longest-subarray-with-maximum-bitwise-and/
 * This function finds the length of the longest contiguous subarray where all elements are equal to
 * the maximum element in the array.
 * @param Integer[] $nums
 * @return Integer
 */
function longestSubarrayWithMaxBitwiseAnd($nums) {
    $max = max($nums);
    $maxLength = 0;
    $currentLength = 0;

    foreach ($nums as $num) {
        if ($num === $max) {
            $currentLength++;
            $maxLength = max($maxLength, $currentLength);
        } else {
            $currentLength = 0;
        }
    }

    return $maxLength;
}

// Example usage
$nums1 = [1, 2, 3, 3, 2, 2];
echo longestSubarrayWithMaxBitwiseAnd($nums1); // Output: 2

$nums2 = [1, 2, 3, 4];
echo longestSubarrayWithMaxBitwiseAnd($nums2); // Output: 1
