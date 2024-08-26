<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        $n = count($nums);
        return $n * ($n + 1) / 2 - array_sum($nums);
    }
}

// XOR:
// [1,2,3] process XOR 1 ^ 2 ^ 3 = 0
// [1,0,3] process XOR 1 ^ 0 ^ 3 = 2
// XOR 0 ^ 2 = 2
