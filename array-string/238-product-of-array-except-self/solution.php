<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $cnt = count($nums);
        $answer = array_fill(0, $cnt, 1);

        // nums   = [1, 2, 3, 4]
        // answer = [1, 1, 1, 1]

        for ($i = 1; $i < $cnt; $i++) {
            $answer[$i] = $answer[$i - 1] * $nums[$i - 1];
        }

        // answer = [1, 1, 2, 6]

        $postfix = array_pop($nums);
        for ($i = $cnt - 2; $i >= 0; $i--) {
            $answer[$i] *= $postfix;
            $postfix *= $nums[$i];
        }

        // answer = [24,12,8,6]

        return $answer;
    }
}
