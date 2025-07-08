/**
    * @param Integer $x
    * @return Integer
    */
function reverse($x) {
    $INT_MAX = 2147483647;
    $INT_MIN = -2147483648;

    $rev = 0;

    while ($x != 0) {
        $pop = $x % 10;
        $x = intdiv($x, 10);

        if ($rev > intdiv($INT_MAX, 10) || ($rev == intdiv($INT_MAX, 10) && $pop > 7)) {
            return 0;
        }
        if ($rev < intdiv($INT_MIN, 10) || ($rev == intdiv($INT_MIN, 10) && $pop < -8)) {
            return 0;
        }

        $rev = $rev * 10 + $pop;
    }

    return $rev;
}
