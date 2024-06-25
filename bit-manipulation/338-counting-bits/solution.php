<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function countBits($n) {
        $result[0] = 0;
        if ($n == 0) return $result;

        $result[1] = 1;
        for ($i = 2; $i < $n + 1; $i++) {
            $result[$i] = $result[$i >> 1] + ($i & 1);
        }

        return $result;
    }
}
