<?php

/*  Definition for a singly-linked list. */
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution{
    var $head;

    function __construct(){
        $this->head = null;
    }

    function push( $data )
    {
        $new_node = new ListNode();
        $new_node->next = $this->head;
        $new_node->val = $data;
        $this->head = $new_node;
    }

    function printList()
    {
        echo "\n";
        $tmp = $this->head;
        while( $tmp ){
            echo $tmp->val.', ';
            $tmp = $tmp->next;
        }
    }

    function middleNode($head)
    {
        $fast = $slow = $head;
        while( $fast && $fast->next ) {
            $slow = $slow->next;
            $fast = $fast->next->next;
        }
        return $slow;
    }
}

$sol = new Solution();
$sol->push(1);
$sol->push(2);
$sol->push(3);
$sol->push(4);
$sol->push(5);
$sol->push(6);
$sol->printList();
echo "\n\n";
$mid = $sol->middleNode($sol->head);
echo $mid->val;
