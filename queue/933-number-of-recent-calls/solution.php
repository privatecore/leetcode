<?php

class RecentCounter {
    /**
     */
    const QUEUE_INTERVAL = 3000;

    /**
     */
    function __construct(
        private array $queue = []
    ) {
    }

    /**
     * @param Integer $t
     * @return Integer
     */
    function ping($t) {
        $this->queue[] = $t;

        $min = $t - self::QUEUE_INTERVAL;
        while ($this->queue[0] < $min) {
            array_shift($this->queue);
        }

        return count($this->queue);
    }
}

/**
 * Your RecentCounter object will be instantiated and called as such:
 * $obj = RecentCounter();
 * $ret_1 = $obj->ping($t);
 */
