<?php
/*
* Leetcode: 2. Add Two Numbers LinkedList;
*
*
*/

/**
 * Definition for a singly-linked list.
 */
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $dummy = new ListNode();
        $current = $dummy;

        $carry = 0;
        while( $l1 || $l2 || $carry ){
            $total = 0;
            if($l1 && $l1->val)
                $total += $l1->val;

            if($l2 && $l2->val)
                $total += $l2->val;

            $total += $carry;

            $carry = intval($total/10);
            $total = $total % 10;
            if( ! $current )
                $current = new ListNode($total);
            else
                $current->next = new ListNode($total);

            $current = $current->next;
            if($l1->next)
                $l1 = $l1->next;
            else
                $l1 = null;

            if($l2->next)
                $l2 = $l2->next;
            else
                $l2 = $l2->next;

        }
        return $dummy->next;
    }

    function print_numbers($nums)
    {
        echo "\n";
        $current = $nums;
        while($current)
        {
            echo $current->val.' ';
            $current = $current->next;
        }
    }
}

$l1 = new ListNode(2);
$l1->next = new ListNode(4);
$l1->next->next = new ListNode(8);

$l2 = new ListNode( 5 );
$l2->next = new ListNode( 6 );
$l2->next->next = new ListNode(4);

$sol = new Solution();
$ans = $sol->addTwoNumbers($l1, $l2);
$sol->print_numbers($l1);
$sol->print_numbers($l2);
$sol->print_numbers($ans);
