<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $result = 0;
        for ($i = 0, $n = count($nums); $i < $n; $i++) {
            $result ^= $nums[$i];
        }

        return $result;
    }
}
