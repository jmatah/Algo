<?php

/**
 * Definition for a binary tree node.
 * 
 **/
class Node
{
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
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
        if( $this->root == null ) {
            $this->root = new Node($data);
        }
        else {
            $current = $this->root;
            while(true) {
                if( $data < $current->val ) {
                    if( ! $current->left) {
                        $current->left = new Node($data);
                        break;
                    } else {
                        $current = $current->left;;
                    }
                } 
                else if( $data > $current->val ) {
                    if( ! $current->right ) {
                        $current->right = new Node($data);
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

    function printTree_dfs( $node = null )
    {
        if( $node->root == null )
            return false;
        
        $current = $node->root;
        if( $current->left )
            $this->printTree_dfs($current);

        echo " ".$current->val;

        if( $current->right)
            $this->printTree_dfs($current);
    }

    function printTree_bfs( $node = null )
    {
        if( $node->root == null ) {
            echo "\nEmpty Tree";
            return false;
        }

        $queue = [$node];
        while( ! empty( $queue ) )
        {
            foreach( $queue as $q ) {
                if( $q->val != 0 )
                    echo $q->val.' ';
                else
                    echo 'null';
            }
            $next_level = [];
            foreach( $queue as $q )
            {
                if( ! empty( $q->left ) ){
                    $next_level[] = $q->left;
                }
                if( ! empty( $q->left ) && empty( $q->right ) ){
                    $next_level[] = new Node(0);
                }
                if( empty( $q->left ) && ! empty( $q->right ) ){
                    $next_level[] = new Node(0);
                }
                if( ! empty( $q->right ) ){
                    $next_level[] = $q->right;
                }
            }
            $queue = $next_level;
        }
        echo "\n";
    }

    /**
     * @param TreeNode $root1
     * @param TreeNode $root2
     * @return TreeNode
     */
    function mergeTrees($root1, $root2) {
        if( $root1->root ==  null ){
            return $root2;
        } 
        if( $root2->root == null ){
            return $root1;
        }

        $root1->val += $root2->val;
        $root1->left = $this->mergeTrees($root1->left, $root2->left);
        $root1->right = $this->mergeTrees($root1->right, $root2->right);
        return $root1;
    }
}

$root1 = new Solution();
$root1->insert(1);
$root1->root->left = new Node(3);
$root1->root->right = new Node(2);
$root1->root->left->left = new Node(5);

$root2 = new Solution();
$root2->insert(2);
$root2->root->left = new Node(1);
$root2->root->right = new Node(3);
$root2->root->left->right = new Node(4);
$root2->root->right->right = new Node(7);

$sol = new Solution();
//$root3 = $sol->mergeTrees($root1, $root2);
$sol->printTree_bfs($root1);
$sol->printTree_bfs($root2);
$sol->printTree_bfs($root3);
