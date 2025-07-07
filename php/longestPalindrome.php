<?php

function longestPalindrome($s) {
    $n = strlen($s);
    if ($n < 1) return "";

    $start = 0;
    $end = 0;

    for ($i = 0; $i < $n; $i++) {
        $len1 = expandAroundCenter($s, $i, $i);     // odd length
        $len2 = expandAroundCenter($s, $i, $i + 1); // even length
        $len = max($len1, $len2);

        if ($len > $end - $start) {
            $start = $i - floor(($len - 1) / 2);
            $end = $i + floor($len / 2);
        }
    }

    return substr($s, $start, $end - $start + 1);
}

function expandAroundCenter($s, $left, $right) {
    $L = $left;
    $R = $right;
    $n = strlen($s);

    while ($L >= 0 && $R < $n && $s[$L] === $s[$R]) {
        $L--;
        $R++;
    }

    return $R - $L - 1;
}

// Example usage
echo longestPalindrome("babad"); // Output: "bab" or "aba"
echo "\n";
echo longestPalindrome("cbbd");  // Output: "bb"
