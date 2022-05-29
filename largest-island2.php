<?php

class Solution{
    function maxAreaOfIsland($grid)
    {
        $seen = [];
        $stack = [];
        $res = 0;
        list( $rows, $cols ) = array( count($grid)-1, count($grid[0])-1);

        foreach( range(0, $rows) as $i){
            foreach( range(0, $cols) as $j ){
                if( $grid[$i][$j] == 1 && ! isset($seen[$i][$j])){
                    $shape = 0;
                    $seen[$i][$j] = 1;
                    $stack[] = [$i,$j];
                    while( ! empty( $stack )){
                        list($r, $c) = array_pop( $stack);
                        $shape++;
                        if( $r+1 < count($grid) && $grid[$r+1][$c] == 1 && ! isset($seen[$r+1][$c]) ){
                            $stack[] = [$r+1, $c];
                            $seen[$r+1][$c] = 1;
                        }
                        if( $r-1 >= 0 && $grid[$r-1][$c] == 1 && ! isset($seen[$r-1][$c]) ){
                            $stack[] = [$r-1, $c];
                            $seen[$r-1][$c] = 1;
                        }
                        if( $c+1 < count($grid[0]) && $grid[$r][$c+1] == 1 && ! isset($seen[$r][$c+1]) ){
                            $stack[] = [$r, $c+1];
                            $seen[$r][$c+1] = 1;
                        }
                        if( $c-1 >= 0 && $grid[$r][$c-1] == 1 && ! isset($seen[$r][$c-1]) ){
                            $stack[] = [$r, $c-1];
                            $seen[$r][$c-1] = 1;
                        }

                    }
                    $res = max( $res, $shape);
                }
            }
        }
        return $res;
    }
}

$grid = [[0,0,1,0,0,0,0,1,0,0,0,0,0],[0,0,0,0,0,0,0,1,1,1,0,0,0],[0,1,1,0,1,0,0,0,0,0,0,0,0],[0,1,0,0,1,1,0,0,1,0,1,0,0],[0,1,0,0,1,1,0,0,1,1,1,0,0],[0,0,0,0,0,0,0,0,0,0,1,0,0],[0,0,0,0,0,0,0,1,1,1,0,0,0],[0,0,0,0,0,0,0,1,1,0,0,0,0]];

//$grid = [[0,0,0,0,0,0,0,0]];
$sol = new Solution();
$ans = $sol->maxAreaOfIsland($grid);
print_r($ans);
