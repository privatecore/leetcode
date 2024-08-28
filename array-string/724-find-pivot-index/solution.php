<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums) {
        $cnt = count($nums);
        if ($cnt == 1) return 0;

        $leftSum = 0;
        $totalSum = array_sum($nums);
        for ($i = 0; $i < $cnt; $i++) {
            if ($leftSum == $totalSum - $leftSum - $nums[$i]) {
                return $i;
            }

            $leftSum += $nums[$i];
        }

        return -1;
    }
}
