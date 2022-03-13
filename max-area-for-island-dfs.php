<?php

class Solution {
    var $grid;
    function calculateIsland($i, $j)
    {
        $curCount = 0;
        if( $this->grid[$i][$j] == 1) {
            $curCount++;
            $this->grid[$i][$j] = 0;

            if( $i -1 >= 0)
                $curCount += $this->calculateIsland($i-1, $j);
            if( $i + 1 < count($this->grid))
                $curCount += $this->calculateIsland($i+1, $j);
            if( $j - 1 >= 0)
                $curCount += $this->calculateIsland($i, $j-1);
            if( $j + 1 < count($this->grid[0]))
                $curCount += $this->calculateIsland($i, $j+1);
        }
        return $curCount;
    }
    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function maxAreaOfIsland($grid) {
        $max = 0;
        $this->grid = $grid;
        if( count($this->grid) == 0 ) return 0;

        for($i=0; $i < count($this->grid); $i++ ){
            for($j=0; $j < count($this->grid[0]); $j++ ){
                if($this->grid[$i][$j] == 1 )
                    $max = max( $max, $this->calculateIsland($i, $j));
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
$sol = new Solution();
$max = $sol->maxAreaOfIsland($grid);
echo $max;
var_dump($max);