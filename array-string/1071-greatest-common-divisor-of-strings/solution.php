<?php

class Solution {

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    function gcdOfStrings($str1, $str2) {
        if ($str1.$str2 != $str2.$str1) {
            return "";
        }

        $strlen1 = strlen($str1);
        $strlen2 = strlen($str2);

        $max = max($strlen1, $strlen2);
        $min = min($strlen1, $strlen2);
        // Euclidean algorithm:
        // Denoting this remainder as a mod b, the algorithm replaces (a, b)
        // with (b, a mod b) repeatedly until the pair is (d, 0), where d is
        // the greatest common divisor.
        while ($min > 0) {
            $prev = $max;
            $max = min($max, $min);
            $min = $prev % $min;
        }

        return substr($str1, 0, $max);
    }
}
