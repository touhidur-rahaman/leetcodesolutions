function isPalindrome($x) {
    $str = strval($x);
    return $str === strrev($str);
}