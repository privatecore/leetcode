<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function increasingTriplet($nums) {
        $min1 = $min2 = PHP_INT_MAX;
        for ($i = 0, $cnt = count($nums); $i < $cnt; $i++) {
            if ($nums[$i] <= $min1) {
                $min1 = $nums[$i];
            } elseif ($nums[$i] <= $min2) {
                $min2 = $nums[$i];
            } else {
                return true;
            }
        }

        return false;
    }
}
