<?php
/**
 * Binary Search;
 * 
*/

function binary_search( $arr, $search, $left, $right, $cnt )
{
    $cnt++;
    if($cnt > 20) return 'break';

    echo "\n<br/>Start with : ".$left.';;'.$right;
    if( $left > $right ) {
        return -1;
    }

    $mid = $left + ceil(($right - $left)/ 2);
    echo "\n<br/>New mid: ".$mid.' => '.$arr[$mid];
    if( $arr[$mid] == $search ) {
        return $mid;
    }

    if( $arr[$mid] < $search )
        return binary_search( $arr, $search, $mid+1, $right, $cnt );
    else
        return binary_search( $arr, $search, $left, $mid-1, $cnt );
}

$arr = [2,3,4,5,7,8,9,10,20,33,40,42,44,45,55,65,68,76,98,101,202,203,204,205,206,207,208,209,210,211,212,2111];

$length = count($arr) - 1;
$search = 5;

$result = binary_search( $arr, $search, 0, $length, 0 );
echo sprintf( "\nSearching %d in array: <pre>%s</pre>", $search, print_r( $arr, true ) );
if( $result != -1 )
    echo sprintf( "\nSearch found at key: %d", $result );
else 
    echo "\nSearch not found";


