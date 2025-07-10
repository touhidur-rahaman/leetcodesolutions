function isMatch($s, $p) {
    return strlen(preg_replace('/' . $p . '/', '', $s, 1)) == 0;
}