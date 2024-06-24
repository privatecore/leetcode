<?php

class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2) {
        $result = '';

        for ($i = 0, $s = 0, $len = strlen($word1) + strlen($word2); $i < $len; $i++) {
            if (($i ^ 1) > $i) {
                $result .= $word1[$s] ?? $word2[$s++];
            } else {
                // this is tricky one, cuz we still increment in the first expression
                // even if word2 does not have index
                $result .= $word2[$s++] ?? $word1[$s++];
            }
        }

        return $result;
    }
}
