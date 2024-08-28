class Solution {

    /**
     * @param Integer[] $gain
     * @return Integer
     */
    function largestAltitude($gain) {
        $max = $total = 0;
        for ($i = 0, $cnt = count($gain); $i < $cnt; $i++) {
            $total += $gain[$i];
            $max = max($max, $total);
        }

        return $max;
    }
}
