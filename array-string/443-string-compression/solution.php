<?php

class Solution {

    /**
     * @param String[] $chars
     * @return Integer
     */
    function compress(&$chars) {
        $left = $right = $total = 0;
        while ($left < count($chars)) {
            if (isset($chars[$right]) && $chars[$left] === $chars[$right]) {
                $right++;
                $total++;
            } else {
                $left++;
                $totalArr = str_split(strval($total));
                if ($total > 1) {
                    array_splice($chars, $left, $total - 1, $totalArr);
                    $left = $left + count($totalArr);
                }

                $right = $left;
                $total = 0;
            }
        }
    }
}
