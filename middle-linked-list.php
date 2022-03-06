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
     * @return ListNode
     */
    function middleNode($head) 
    {
        $slow = $fast = $head;
        while( $fast && $fast->next )
        {
            $slow = $slow->next;
            $fast = $fast->next->next;
        }
        return $slow;
    }
}

$sol = new Solution();
$sol->push(10);
$sol->push(20);
$sol->push(30);
$sol->push(40);
$sol->push(50);
$sol->push(60);
$sol->push(70);
echo "here";
$sol->printList();
echo "\nhere:";
var_dump($sol->middleNode($sol->head));
