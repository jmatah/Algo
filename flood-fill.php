<?php

class Solution {
    var $image, $oldColor, $newColor;
    /**
     * @param Integer[][] $image
     * @param Integer $sr
     * @param Integer $sc
     * @param Integer $newColor
     * @return Integer[][]
     */

    function doColor( $sr, $sc )
    {
        if( $this->image[$sr][$sc] == $this->oldColor ) {
            $this->image[$sr][$sc] = $this->newColor;
            if( $sr - 1 >= 0 )
                $this->doColor($sr-1, $sc);
            if( $sr + 1 < count($this->image ) )
                $this->doColor($sr+1, $sc);
            if( $sc - 1 >= 0 )
                $this->doColor($sr, $sc -1 );
            if( $sc + 1 < count( $this->image[0] ) )
                $this->doColor($sr, $sc + 1);
        }
    }
    function floodFill($image, $sr, $sc, $newColor) {
        $this->image = $image;
        $this->newColor = $newColor;
        $this->oldColor = $image[$sr][$sc];

        if( $this->oldColor == $this->newColor )
            return $this->image;

        $this->doColor($sr, $sc );
        return $this->image;
    }
}

$image = [[1,1,1],[1,1,0],[1,0,1]];
$sr = 1;
$sc = 1;
$newColor = 2;

// $image = [[0,0,0],[0,0,0]];
// $sr = 0;
// $sc = 0;
// $newColor = 2;

// $image = [[0,0,0],[0,1,1]];
// $sr = 1;
// $sc = 1;
// $newColor = 1;

$sol = new Solution();
$image = $sol->floodFill($image, $sr, $sc, $newColor);
print_r($image);