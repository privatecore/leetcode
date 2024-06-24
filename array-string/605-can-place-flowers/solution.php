<?php

class Solution {

    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n) {
        $plots = 0;
        for ($i = 0, $cnt = count($flowerbed); $i < $cnt; $i++) {
            if ($flowerbed[$i]) continue;

            if (empty($flowerbed[$i - 1]) && empty($flowerbed[$i + 1])) {
                $plots += 1;
                $i++;
            }
        }

        return $plots >= $n;
    }
}
