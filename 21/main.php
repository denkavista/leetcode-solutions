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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        $result = new ListNode();
        $pointer = $result;

        while($list1 !== null && $list2 !== null){
            if($list1->val >= $list2->val){
                $pointer->next = $list2;
                $list2 = $list2->next;
            } else {
                $pointer->next = $list1;
                $list1 = $list1->next;
            }
            $pointer = $pointer->next;
        }

        $pointer->next = $list1 !== null ? $list1 : $list2;

        return $result->next;
    }
}
