/**
* @param String $s
* @return Integer
*/
function myAtoi($s) {
    $s = ltrim($s);

    if ($s === '') return 0;

    $i = 0;
    $sign = 1;
    $num = 0;
    $n = strlen($s);

    if ($s[$i] === '-') {
        $sign = -1;
        $i++;
    } elseif ($s[$i] === '+') {
        $i++;
    }

    while ($i < $n && ctype_digit($s[$i])) {
        $digit = (int)$s[$i];
        $num = $num * 10 + $digit;
        $i++;
    }

    $num *= $sign;

    $intMin = -2 ** 31;
    $intMax = 2 ** 31 - 1;

    if ($num < $intMin) return $intMin;
    if ($num > $intMax) return $intMax;

    return $num;
}