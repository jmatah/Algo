<?php
/**
 * 116. Populating Next Right Pointers in Each Node PHP LeetCode
 * Definition for a Node.
 */ 
class Node {
    function __construct($val = 0) {
        $this->val = $val;
        $this->left = null;
        $this->right = null;
        $this->next = null;
    }
}

class Solution {
    public $root;
    function __construct()
    {
        $this->root = null;
    }

    function insert($data)
    {
        if( $this->root == null )
            $this->root = new Node($data);
        else {
            $current = $this->root;
            while(true) {
                if( $data < $current->val ) {
                    if( ! $current->left ){
                        $current->left = new Node($data);
                        break;
                    }
                    else {
                        $current = $current->left;
                    }
                }
                else if( $data > $current->val ){
                    if( ! $current->right ) {
                        $current = $current->right;
                        break;
                    }
                    else {
                        $current = $current->right;
                    }
                }
                else {
                    break;
                }
            }
        }
    }

    function createTree($root=array())
    {
        foreach($root as $r)
            $this->insert($r);
    }
    /**
    @param Node $root
    @return Node
     */
    public function connect($root) {
        if($root==null)
            return;

        $queue = [$root];
        while( ! empty($queue)){
            $prev = null;
            foreach( $queue as $q ){
                if( $prev && ! $prev->next && $q->left)
                    $prev->next = $q->left;
                else if( $prev && ! $prev->next )
                    $prev->next = '#';

                if( $q->left && $q->right )
                    $q->left->next = $q->right;
                if( $q->left && ! $q->right )
                    $q->left->next = '#';
                if($q->right)
                    $prev = $q->right;
                else if($q->left)
                    $prev = $q->left;
                else    
                    $prev = null;
            }
            $depth++;
            $next_level = [];
            foreach( $queue as $q ){
                if( $q->left ) {
                    $next_level[] = $q->left;
                }
                if( ! $q->left && $q->right )
                    $next_level[] = new Node(0);
                if( $q->left && ! $q->right )
                    $next_level[] = new Node(0);
                if( $q->right )
                    $next_level[] = $q->right;
            }
            $queue = $next_level;
        }
        return $root;
    }
}

$root = [1,2,3,4,5,6,7];

$sol = new Solution();
//$tree = $sol->createTree($root);
$r = new Node(1);
$r->left = new Node(2);
$r->left->left = new Node(4);
$r->left->right = new Node(5);
$r->right = new Node(3);
$r->right->left = new Node(6);
$r->right->right = new Node(7);
$ret = $sol->connect($r);
print_r( $ret );