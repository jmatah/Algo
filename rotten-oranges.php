<?php
/**
 * Leetcode 
 * 994. Rotting Oranges PHP
 * 
 * 
 **/
class Solution {

    function printGrid( $grid )
    {
        $html = '';
        foreach( range(0, count($grid)-1) as $i ){
            $html .= "\n".implode(",", $grid[$i]);
        }
        return $html;
    }
    /**
    * @param Integer[][] $grid
    * @return Integer
    */
    function orangesRotting($grid) {
        $minute = 0;
        $row_dir = [1,-1,0,0];
        $col_dir = [0,0,1,-1];
        $queue = [];
        $total = 0;
        $rotten = 0;

        foreach( range(0, count($grid)-1) as $i){
            foreach( range( 0, count($grid[0])-1) as $j ){
                if( $grid[$i][$j] == 2 )
                    $queue[] = [$i, $j];
                if( $grid[$i][$j] == 1 || $grid[$i][$j] == 2 )
                    $total++;
            }
        }

        if( $total == 0 )
            return 0;

        while( ! empty( $queue ) ) {
            $rotten += count($queue);
            if( $rotten == $total )
                return $minute;
            $minute++;

            //the entire current queue takes one minute!
            foreach( range(0, count($queue)-1) as $a ) {
                $curr = array_shift($queue);
                foreach( range(0, 3 ) as $pos ) {
                    list($new_r, $new_c) = array( $curr[0] + $row_dir[$pos], $curr[1] + $col_dir[$pos]);
                    if( $new_r >=0 && $new_r < count($grid) && $new_c >= 0 && $new_c < count($grid[0]) && $grid[$new_r][$new_c] == 1 ) {
                        $grid[$new_r][$new_c] = 2;
                        $queue[] = [$new_r, $new_c];
                    }
                }
            }
        }     
        return -1;
    }
}

$grid = [[2,1,1],[1,1,0],[0,1,1]];
#$grid = [[2,1,1],[1,1,1],[0,1,2]];
echo "Original: ";
$sol = new Solution();
echo $sol->printGrid($grid);
$ans = $sol->orangesRotting($grid);
echo "\n";

print_r($ans);