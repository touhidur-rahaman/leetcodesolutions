<?php 

class IndexOfFirstOccurence {

    /**
     * problem url = https://leetcode.com/problems/find-the-index-of-the-first-occurrence-in-a-string/description/
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $pos = strpos($haystack, $needle);
        return $pos !== false ? $pos : -1;
    }
}

$i = new IndexOfFirstOccurence();

$haystack="asdsadbutsad";
$needle="sad";
print_r($i->strStr($haystack,$needle));