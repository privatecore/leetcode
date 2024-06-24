<?php

class Solution {

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        $result = [];

        $max = max($candies);
        for ($i = 0, $cnt = count($candies); $i < $cnt; $i++) {
            // gready comparison here as hint says ;)
            $result[] = $candies[$i] + $extraCandies >= $max;
        }

        return $result;
    }
}
