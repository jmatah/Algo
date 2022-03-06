<?php
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
    var $head;
    function __construct()
    {
        $this->head = null;
    }

    function push($data)
    {
        $new_node = new ListNode();
        $new_node->next = $this->head;
        $new_node->val = $data;
        $this->head = $new_node;
    }

    function printList()
    {
        $tmp = $this->head;
        $k = 0;
        while($tmp)
        {
            echo $tmp->val.' ';
            $tmp = $tmp->next;
        }
    }
    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        $fast_p = $head;
        $slow_p = $head;

        foreach( range(0, $n-1) as $k => $a ) {
            if( $fast_p->next == null ) {
                if( $k == $n - 1 ) {
                    $head = $head->next;
                }
                return $head;
            }
            $fast_p = $fast_p->next;
        }

        while( $fast_p->next != null ) {
            $fast_p = $fast_p->next;
            $slow_p = $slow_p->next;
        }

        if( $slow_p->next != null ) {
            $slow_p->next = $slow_p->next->next;
        }

        return $head;
    }
}

$sol = new Solution();
// $sol->push(5);
// $sol->push(4);
// $sol->push(3);
$sol->push(2);
$sol->push(1);
$sol->printList();
echo "\nhere:";
$d = $sol->removeNthFromEnd($sol->head, 1);
var_dump($d);
