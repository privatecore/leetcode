<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        $result = null;
        while ($head != null){
            // reverse order: pass val as current, next as previous
            $result = new ListNode($head->val, $result);
            $head = $head->next;
        }

        return $result;
    }
}
