<?php

/**
 * LeetCode.com 206. Reverse Linked List PHP
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

    function append( $data )
    {
        if( $this->head == null ){
            $this->head = new ListNode($data);
            return;
        }
        $tmp = $this->head;
        while($tmp->next){
            $tmp = $tmp->next;
        }
        $tmp->next = new ListNode($data);
    }

    function push( $data )
    {
        $new_node = new ListNode($data);
        $new_node->next = $this->head;
        $this->head = $new_node;
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
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        if(empty($head))
            return $head;

        $prev = null;
        $current = $this->head;
        //for leetCode submission
        //$current = $head;
        while( $current ){
            $next = $current->next;
            $current->next = $prev;
            $prev = $current;
            $current = $next;
        }
        $this->head = $prev;
        //for leetCode submission
        //$head = $prev;
        //return $head;
    }
}

$head = [1,2,3,4,5];
$sol1 = new Solution();
foreach($head as $h ){
    $sol1->push($h);
}
$sol1->printList();
$sol1->reverseList($sol1->head);
$sol1->printList();