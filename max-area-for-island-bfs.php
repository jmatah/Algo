<?php

class Solution {
    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function maxAreaOfIsland($grid) {
        if( count($grid) == 0 ) return 0;
        $rows = count($grid);
        $cols = count($grid[0]);
        $row_dir = [-1,0,1,0];
        $col_dir = [0,1,0,-1];

        $row_dir = [0,0,1,-1];
        $col_dir = [1,-1,0,0];
        $seen = [];
        $max = 0;

        for($i=0; $i < count($grid); $i++ ){
            for($j=0; $j < count($grid[0]); $j++ ) {
                if( $grid[$i][$j] == 1 && empty( $seen[$i][$j] ) ) {
                    $q = [[$i, $j]];
                    $area = 0;
                    while( ! empty( $q ) ) {
                        $curr = array_pop($q);
                        $seen[$curr[0]][$curr[1]] = 1;
                        $area++;
                        foreach( range(0, 3) as $k ) {
                            $nr = $curr[0] + $row_dir[$k];
                            $nc = $curr[1] + $col_dir[$k];
                            if( $nr >= 0 && $nr < $rows && $nc >= 0 && $nc < $cols && $grid[$nr][$nc] == 1 && empty( $seen[$nr][$nc] ) ){
                                $q[] = [$nr, $nc];
                                $seen[$nr][$nc] = 1;
                            }
                        }
                    }
                    $max = max( $max, $area);
                }
            }
        }
        return $max;
    }
}



/*
[
    [0,0,1,0,0,0,0,1,0,0,0,0,0],
    [0,0,0,0,0,0,0,1,1,1,0,0,0],
    [0,1,1,0,1,0,0,0,0,0,0,0,0],
    [0,1,0,0,1,1,0,0,1,0,1,0,0],
    [0,1,0,0,1,1,0,0,1,1,1,0,0],
    [0,0,0,0,0,0,0,0,0,0,1,0,0],
    [0,0,0,0,0,0,0,1,1,1,0,0,0],
    [0,0,0,0,0,0,0,1,1,0,0,0,0]
]
*/

$grid = [[0,0,1,0,0,0,0,1,0,0,0,0,0],[0,0,0,0,0,0,0,1,1,1,0,0,0],[0,1,1,0,1,0,0,0,0,0,0,0,0],[0,1,0,0,1,1,0,0,1,0,1,0,0],[0,1,0,0,1,1,0,0,1,1,1,0,0],[0,0,0,0,0,0,0,0,0,0,1,0,0],[0,0,0,0,0,0,0,1,1,1,0,0,0],[0,0,0,0,0,0,0,1,1,0,0,0,0]];
$grid = [[1,1]];
$sol = new Solution();
$max = $sol->maxAreaOfIsland($grid);
echo $max;