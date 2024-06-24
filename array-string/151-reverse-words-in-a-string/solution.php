<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $s = explode(' ', $s);
        $left = 0;
        $right = count($s) - 1;
        while ($left <= $right) {
            if ($s[$left] === '' || $s[$right] === '') {
                if ($s[$left] === '') {
                    unset($s[$left++]);
                }
                if ($left <= $right && $s[$right] === '') {
                    unset($s[$right--]);
                }
            } else {
                [$s[$left], $s[$right]] = [$s[$right], $s[$left]];
                $left++;
                $right--;
            }
        }

        return implode(' ', $s);
    }
}
