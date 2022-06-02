<?php

class Solution {

    /**
     * @param Integer[][] $mat
     * @return Integer[][]
     */
    function updateMatrix($mat) {
        if( count($mat) == 0 || count( $mat[0]) == 0 )
            return $mat;
        
        list( $row, $col ) = array( count($mat), count($mat[0]));
        $dist = [];
        $queue = [];

        foreach( range(0, $row-1) as $i ){
            foreach( range(0, $col-1) as $j){
                if( $mat[$i][$j] == 0 ){
                    $dist[$i][$j] = 0;
                    $queue[] = [$i, $j];
                } 
                else {
                    $dist[$i][$j] = PHP_INT_MAX;
                }
            }
        }

        $row_dir = [0,0,1,-1];
        $col_dir = [1,-1,0,0];

        while( ! empty( $queue )){
            $curr = array_pop($queue);

            foreach( range(0,3) as $pos) {
                $new_r = $curr[0] + $row_dir[$pos];
                $new_c = $curr[1] + $col_dir[$pos];

                if( $new_r >= 0 && $new_r < $row && $new_c >= 0 && $new_c < $col ){
                    if( $dist[$new_r][$new_c] > $dist[$curr[0]][$curr[1]] + 1 ){
                        $dist[$new_r][$new_c] = $dist[$curr[0]][$curr[1]] + 1;
                        $queue[] = [$new_r, $new_c];
                    }
                }
            }
        }

        return $dist;
    }
}