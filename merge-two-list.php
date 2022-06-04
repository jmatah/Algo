<?php
/**
 * # Leetcode 21. Merge Two Sorted Lists PHP
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
    public $head;
    function __construct()
    {
        $this->head = null;
    }

    function append($data)
    {
        if( $this->head == null ){
            $this->head = new ListNode($data);
            return;
        }

        $tmp = $this->head;

        while( $tmp->next ){
            $tmp = $tmp->next;
        }
        $tmp->next = new ListNode($data);
    }

    function printList()
    {
        echo "\n";
        $tmp = $this->head;
        while($tmp){
            echo $tmp->val.' ';
            $tmp = $tmp->next;
        }
    }
    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        $tmp = null;
        if(empty($list1))
            return $list2;
        if(empty($list2))
            return $list1;

        if( $list1->val <= $list2->val ){
            $tmp = $list1;
            $tmp->next = $this->mergeTwoLists($tmp->next, $list2);
        }
        else {
            $tmp = $list2;
            $tmp->next = $this->mergeTwoLists($list1, $tmp->next);
        }
        return $tmp;
    }
}

$list1 = [1,2,4]; 
$list2 = [1,3,4];
$sol1 = new Solution();
foreach( $list1 as $l ){
    $sol1->append($l);
}
$sol1->printList();

$sol2 = new Solution();
foreach( $list2 as $l ){
    $sol2->append($l);
}
$sol2->printList();

$sol3 = new Solution();
$sol3->head = $sol3->mergeTwoLists($sol1->head, $sol2->head);
$sol3->printList();