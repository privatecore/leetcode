<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $vowels = ['a', 'e', 'i', 'o', 'u'];

        $left = 0;
        $right = strlen($s) - 1;

        while ($left < $right) {
            if (in_array(strtolower($s[$left]), $vowels)) {
                if (in_array(strtolower($s[$right]), $vowels)) {
                    [$s[$left], $s[$right]] = [$s[$right], $s[$left]];
                    $left++;    
                }

                $right--;
            } else {
                $left++;
            }
        }

        return $s;
    }
}
