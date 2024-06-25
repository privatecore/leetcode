<?php

class Solution {

    /**
     * @param Integer $a
     * @param Integer $b
     * @param Integer $c
     * @return Integer
     */
    function minFlips($a, $b, $c) {
        if (($a | $b) == $c) return 0;

        $result = 0;
        // check last bit of all number and shift right every loop iter
        while ($a || $b || $c) {
            if ($c & 1) {
                // if c last bit is 1 (odd) and both ab last bit is 0 (even)
                // we have to flip once, doesn't matter which one
                if (($a & 1) == 0 && ($b & 1) == 0) {
                    $result++;
                }
            } else {
                // increment by 1 or 2 if one or both ab have last bit 1 (odd),
                // otherwise do nothing -> increment by 0
                $result += ($a & 1) + ($b & 1);
            }

            $a >>= 1;
            $b >>= 1;
            $c >>= 1;
        }

        return $result;
    }
}
