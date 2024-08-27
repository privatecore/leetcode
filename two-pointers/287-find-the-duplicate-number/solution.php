<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findDuplicate($nums) {
        $tortoise = $hare = $nums[0];
        while (true) {
            $tortoise = $nums[$tortoise];
            $hare = $nums[$nums[$hare]];
            if ($tortoise == $hare) break;
        }

        $result = $nums[0];
        while ($result != $tortoise) {
            $result = $nums[$result];
            $tortoise = $nums[$tortoise];
        }

        return $result;
    }
}
