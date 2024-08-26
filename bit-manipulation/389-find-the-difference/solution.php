<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t) {
        if (empty($s)) return $t;

        $result = 0;
        for ($i = 0, $n = strlen($t); $i < $n; $i++) {
            $result += ord($t[$i]);
            if ($i < $n - 1) {
                $result -= ord($s[$i]);
            }
        }

        return chr($result);
    }
}
