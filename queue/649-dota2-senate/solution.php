<?php

class Solution {

    /**
     * @param String $senate
     * @return String
     */
    function predictPartyVictory($senate) {
        $direQueue = [];
        $radiantQueue = [];

        for ($i = 0, $n = strlen($senate); $i < $n; $i++) {
            if ($senate[$i] == 'D') $direQueue[] = $i;
            else $radiantQueue[] = $i;
        }

        while ($direQueue && $radiantQueue) {
            $d = array_shift($direQueue);
            $r = array_shift($radiantQueue);

            if ($d < $r) $direQueue[] = $d + $n;
            else $radiantQueue[] = $r + $n;
        }

        return $direQueue ? 'Dire' : 'Radiant';
    }
}
