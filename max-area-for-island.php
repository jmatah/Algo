<?php

class Solution {
    var $grid;

    function calculateIsland($i, $j, $curCount=0)
    {
        if( $this->grid[$i][$j] == 1) {
            $curCount++;
            if( $i -1 >= 0)
                $curCount = $this->calculateIsland($i-1, $j, $curCount);
            if( $i + 1 < count($this->grid))
                $curCount = $this->calculateIsland($i+1, $j, $curCount);
            if( $j - 1 >= 0)
                $curCount = $this->calculateIsland($i, $j-1, $curCount);
            if( $j + 1 < count($this->grid[0]))
                $curCount = $this->calculateIsland($i, $j+1, $curCount);
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

        for($i=0; $i < count($this->grid); $i++ ){
            for($j=0; $j < count($this->grid[0]); $j++ ){
                if($this->grid[$i][$j] == 1 )
                    $max = max( $max, $this->calculateIsland($i, $j, 1));
            }
        }
    }
}





$grid = [[0,0,1,0,0,0,0,1,0,0,0,0,0],[0,0,0,0,0,0,0,1,1,1,0,0,0],[0,1,1,0,1,0,0,0,0,0,0,0,0],[0,1,0,0,1,1,0,0,1,0,1,0,0],[0,1,0,0,1,1,0,0,1,1,1,0,0],[0,0,0,0,0,0,0,0,0,0,1,0,0],[0,0,0,0,0,0,0,1,1,1,0,0,0],[0,0,0,0,0,0,0,1,1,0,0,0,0]];
$sol = new Solution();
$max = $sol->maxAreaOfIsland($grid);
echo $max;